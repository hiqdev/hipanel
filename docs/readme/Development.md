# [WIP] This guide is being developed.



## Overview

### Test frameworks we use and their purpose

// Codeception, PHPunit. Structure of tests

## Running tests locally

1. Install JDK

2. Install Selenium Web Driver by executing `download.sh` which is located in your hipanel dir in `tests/software/`

3. Execute `run.sh` (in same folder) to run on background

4. To run tests locally use `codecept` which is located in your hipanel dir in `vendor/bin/`

More info about how to run tests with codecept [Here](https://codeception.com/docs/02-GettingStarted#Running-Tests)

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

To make xDebug work in PHPStorm you need:

1. [Install xDebug](https://confluence.jetbrains.com/display/PhpStorm/Xdebug+Installation+Guide)

2. [Install browser extension](https://confluence.jetbrains.com/display/PhpStorm/Browser+Debugging+Extensions)

3. In PHPStorm, __Add Configuration__, choose type __PHP Web Page__

4. In __server__ settings create server and fill data:

   4.1 `localhost` in __Host__

   4.2 `80` in __Port__

   4.3 `Xdebug` in __Debugger__

   4.4 Choose `Use path mappings` option and
       type `/app` in __Absolute path on the server__
       where __File/Directory__ is root path of your project

5. Turn on __Start Listening for PHP Debug Connections__ and
   don't forget to activate your debug browser extension

// What to do in PHPStorm, browser, etc?
// How to check that xDebug is enabled on PHP side?
// Troubleshooting:
// - debug session does not get started;
// - debug can not locate files;

#### Contributing to Codeception tests

// How to run tests and enhance them?
// Limiting tests execution scope to a single cest
