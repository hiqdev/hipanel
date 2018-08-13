# Local Hipanel, Hiam and Hiapi Docker Installation


1. `git clone` all 3 repositories `hipanel`, `hiam` and `hiapi`.

2. Then launch `composer install` and `composer update` in all 3 folders.

3. Next you need to create `.env` and `docker-compose.yml` from `.env.example` and `docker-compose.yml.dist`.


3.1.1 In `hipanel` your `.env` could look like this:

 ```
ENV=dev

HIAM_SITE=http://local.hiam.ahnames.com

REAL_IP=127.0.4.1
HOSTS=docker-hipanel.ahnames.com,www.docker-hipanel.ahnames.com

# Docker configuration
API_HOSTS_LINE=off-local.hiapi.ahnames.com:127.0.2.1
HIART_BASEURI=http://local.hiapi.ahnames.com
```


3.1.2 In `hipanel` in your `docker-compose.yml` you need to add and change this fields:

```
...
    image: nginx:latest
    links:
      - php-fpm
    ports:
      - "127.0.4.1:80:80"
    volumes:
...
    image: hiqdev/php:7.1-fpm
    external_links:
      - "hiamahnamescom_nginx_1:local.hiam.ahnames.com"
      - "hiapiahnamescom_nginx_1:local.hiapi.ahnames.com"
    volumes:
...
    networks:
      - local-network
      - hiam.ahnames.com-network
      - hiapi.ahnames.com-network
    extra_hosts:
...
networks:
    hiam.ahnames.com-network:
        external: true
    hiapi.ahnames.com-network:
        external: true
    local-network:
...
```


3.2.1 In `hiam` your `.env` could look like this:

 ```
ENV=dev
SSL=false
HOSTS=local.hiam.ahnames.com
IPS=127.0.3.1
LOCAL_IPS=127.0.0.2
DB_HOST=pgsql
```


3.2.2 In `hiam` in your `docker-compose.yml` you need to add and change this fields:

```
...
        image: nginx:latest
        links:
            - php-fpm
        ports:
            - "${IPS}:80:80"
        volumes:
...
        networks:
            - local-network
            - hiam.ahnames.com-network
        environment:
...
        image: hiqdev/php:7.1-fpm
        external_links:
            - hiapiahnamescom_pgsql_1:pgsql
        volumes:
...
        networks:
            - local-network
            - hiapi.ahnames.com-network
        environment:
...
networks:
    hiapi.ahnames.com-network:
        external: true
    hiam.ahnames.com-network:
        external: true
    local-network:
...
```


3.3.1 In `hiapi` your `.env` could look like this:

 ```
ENV=dev
SSL=false
HOSTS=local.hiapi.ahnames.com
IPS=127.0.2.1
LOCAL_IPS="192.168.180.25,192.168.180.21,192.168.180.17,192.168.180.13"
DB_HOST=pgsql
```


3.3.2 In `hiapi` in your `docker-compose.yml` you need to add and change this fields:

```
...
        image: hiqdev/php:7.1-fpm
        networks:
            - local-network
        links:
...
        image: registry.hiqdev.com/ahnames/docker-mrdp:latest
        networks:
            - local-network
            - hiapi.ahnames.com-network
        ports:
            - "127.0.0.1:5532:5432"
            - 5432

networks:
    hiapi.ahnames.com-network:
        external: true
    local-network:
        driver: bridge
```

4\. Add these lines to `/etc/hosts`:

```
127.0.2.1   local.hiapi.ahnames.com
127.0.3.1   local.hiam.ahnames.com
127.0.4.1   local.hipanel.ahnames.com
```

5\. Now, you need to launch `docker-compose up` in each of 3 folders.

> Possible error might occur concerning apache in your system.
To resolve it, you need to change port from `80` to some other, for example `8080`,
in `/etc/apache2/sites-available/000-default.conf` file. And to delete (or comment all out),
in `/etc/apache2/ports.conf`

P.S. Don't forget `composer dump`
