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

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2015-2018, HiQDev (http://hiqdev.com/)
