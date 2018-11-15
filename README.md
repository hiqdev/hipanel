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

In order to run tests, you need to have installed `JDK 11+` to run `Selenium`, `Selenium` itself and `ChromeDriver`. Selenium is a Java software that provides an API for automated web pages testing by serfing real web pages with a real browser.

__1.__ [Download](https://www.oracle.com/technetwork/java/javase/downloads/jdk11-downloads-5066655.html) and install JDK for your platform.

__2.__ For Debian-based OS (e.g. Ubuntu) run our script which downloads `Selenium` and `ChromeDriver`
```
cd tests/software
./download.sh
```

For other OS'es – find and download appropriate executables.

__3.__ Run `Selenium` with `ChromeDriver`
```
./run.sh
```
__4.__ Build tests to compile actors classes with appropriate modules. Read Codeception docs to understand how it works.
```
./vendor/bin/codecept build    
```
__5.__ Run tests

- All tests:
```bash
./vendor/bin/codecept run
```

- Module-specific:
```bash
./vendor/bin/codecept run vendor/hiqdev/hipanel-module-finance/tests/acceptance
```

You can also add flags `-v`, `-vv` or `-vvv` for different levels of verbosity, or add debug flag `-d` to have even more detailed output. For example:
```bash
./vendor/bin/codecept run -d -vvv vendor/hiqdev/hipanel-module-finance/tests/acceptance
```


### Running tests inside Docker

// How to?


## Contributing

// How do we contribute?
// Trunk based development
// Merge requests
// Reviews

### Docker-based development env

// What to read about?

#### xDebug in Docker

// What to do in PHPStorm, browser, etc?
// How to check that xDebug is enabled on PHP side?
// Troubleshooting:
// - debug session does not get started;
// - debug can not locate files;

#### Contributing to Codeception tests

// How to run tests and enhance them?
// Limiting tests execution scope to a single cest
