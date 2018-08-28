# HiPanel

**Control panel for hosting, domains and more.**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hipanel/v/stable)](https://packagist.org/packages/hiqdev/hipanel)
[![Total Downloads](https://poser.pugx.org/hiqdev/hipanel/downloads)](https://packagist.org/packages/hiqdev/hipanel)
[![Build Status](https://img.shields.io/travis/hiqdev/hipanel.svg)](https://travis-ci.org/hiqdev/hipanel)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hipanel.svg)](https://scrutinizer-ci.com/g/hiqdev/hipanel/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hipanel.svg)](https://scrutinizer-ci.com/g/hiqdev/hipanel/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hipanel/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hipanel/dev-master)

[![Logo](https://raw.githubusercontent.com/hiqdev/hipanel-core/master/docs/logo.png)](https://hipanel.com/)

This package is the template for creating HiPanel project for your needs.

HiPanel is splitted into many pluggable packages you can choose from:

- [hipanel-core](https://hiqdev.com/packages/hipanel-core) - core package
- [hipanel-rbac](https://hiqdev.com/packages/hipanel-rbac) - RBAC
- [hipanel-hiart](https://hiqdev.com/packages/hipanel-hiart) - HiArt
- [hipanel-module-client](https://hiqdev.com/packages/hipanel-module-client) - clients and contacts
- [hipanel-module-domain](https://hiqdev.com/packages/hipanel-module-domain) - registered domains
- [hipanel-module-finance](https://hiqdev.com/packages/hipanel-module-finance) - billing, invoices, tariffs, payment systems integration, shopping cart
- [hipanel-module-ticket](https://hiqdev.com/packages/hipanel-module-ticket) - support ticket system
- [hipanel-module-hosting](https://hiqdev.com/packages/hipanel-module-hosting) - accounts, virtual hosts, databases, backups, ips
- [hipanel-module-server](https://hiqdev.com/packages/hipanel-module-server) - servers
- [hipanel-module-dashboard](https://hiqdev.com/packages/hipanel-module-dashboard) - dashboard
- [hipanel-module-request](https://hiqdev.com/packages/hipanel-module-request) - requests
- [hipanel-module-stock](https://hiqdev.com/packages/hipanel-module-stock) - models and items in stock, history of orders and movements
- [hipanel-module-dns](https://hiqdev.com/packages/hipanel-module-dns) - DNS records
- [hipanel-module-document](https://hiqdev.com/packages/hipanel-module-document) - files and documents
- [hipanel-module-mailing](https://hiqdev.com/packages/hipanel-module-mailing) - email marketing
- [hipanel-module-certificate](https://hiqdev.com/packages/hipanel-module-certificate) - SSL certificates

## Installation

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

## Development

# [WIP] This guide is being developed.



## Overview

### Test frameworks we use and their purpose

// Codeception, PHPunit. Structure of tests

## Running tests locally

// Without Docker. What should be installed to run tests? Why do we need to run tests locally without Docker?

### Running tests inside Docker

// How to?

In `.env` file witch placed in root directory of the project, bring the items to this form
```
ENV=dev
TEST=1

SSL=false
#HOSTS=hiam
IPS=127.0.0.1
LOCAL_IPS=127.0.0.1
DB_HOST=rcp
DB_PORT=5432
URL=http://hiam
TESTS_ACCEPTANCE_SELENIUM_HOST=selenium
```

Then

1. `cd tests`
2. `docker-compose docker-compose -f docker-compose.yml -f docker-compose.yml.dev up -d`
3. `docker-compose exec hiam ./vendor/bin/codecept run -f -vvv`

In order to stop the container type `docker-compose down` in the `tests` directory.

You can edit config of running test application, changing the parameters in the files `config/test.php`,
`config/codeception.php`, `config/acceptence.php`.

## Contributing

// How do we contribute?
// Trunk based development
// Merge requests
// Reviews

### Docker-based development env

// What to read about?

- [PHP dotenv](https://github.com/vlucas/phpdotenv)
- [Docker Documentation](https://docs.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

#### xDebug in Docker

// What to do in PHPStorm, browser, etc?

If you enable xdebug in your server every time we run a script in PHP is going to send the information to the listener, 
the Listener in our case is PHPStorm.

In order to allow connection we need to configure the server where our code is. 
Add new server to debug config. set the name we prefer, configure the domain, 
and the port where our docker container is listen (by default 80).
Then we need to click in the option `Use path mapping …`, automatically PHPStorm is going to show the tree directory of 
our project, in the column `Absolute path on the server` we need to add the path of our project in the container, 
in my case is `/app`.

In the browser you need to go to the IP address specified in the configuration file xDebug running container 
and specify the port that you can find by entering the command `docker-compose ps`. In column `Ports` you will see 
that for example `0.0.0.0:32768->80/tcp, 9000/tcp` where `32768` is the port we must enter.

// How to check that xDebug is enabled on PHP side?

Go to running container `docker-compose exec hiam bash`, in container type `php -i | grep xdebug`, 
find out path to xdebug ini file, `cat /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini` and check 
`remote_enabled`, `remote_port`, `remote_host`.

// Troubleshooting:
// - debug session does not get started;
- check ''
- check `Use path mappings...`

// - debug can not locate files;
- check `Use path mappings...` 

#### Contributing to Codeception tests

// How to run tests and enhance them?
// Limiting tests execution scope to a single cest
