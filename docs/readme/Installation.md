## Prerequisites

__1.__ __PHP 7.1__. (ondrej)

__2.__ __Composer__.

__3.__ __docker-compose__.

__4.__ [HiDev](https://github.com/hiqdev/hidev).

## Installation

__1.__ `git clone` [hipanel](https://git.hiqdev.com/advancedhosters/hipanel.advancedhosters.com)

__2.__ Then, `composer install` in repository root.

__3.__ Using _.env.example_ as example, create an __.env__ file, with following content:

```
ENV=dev
REAL_IP=127.0.0.1
HOSTS=local.hipanel.advancedhosters.com
API_HOSTS_LINE=hiapi.advancedhosters.com:88.208.34.69

```
where __88.208.34.69__ is ip you get from `ping hiapi.advancedhosters.com`

__4.__ Next, `hidev deploy` in repository root.

__5.__ Then `docker-compose up`.

__6.__ Using `docker ps` you could find out port number.

For example, in _0.0.0.0:32785_ use __32785__ number with your __REAL_IP__, it should look like `127.0.0.1:32785` in browser address bar.

You could make your port number permanent by editing `docker-compose.yml` file in __ports:__ field.

For example:

```
...
    ports:
      - "0.0.0.0:1080:80"
...
```

where `127.0.0.1:1080` would be your entry point.

## Error

If you couldn't access page by `127.0.0.1:32785` url, the problem might be with wrong ip address in __API_HOSTS_LINE__. You should then again `ping hiapi.advancedhosters.com` and change ip address in `.env` file. Then you need to `docker-compose down; docker-compose up`.
