# Testing PHPStorm + docker-compose + XDebug environment

This repository contains a basic PHP setup that can be used to test Docker and XDebug integration in a PHPStorm environment.

See [the setup documentation](docs/SETUP.md) on how to configure PHPStorm.

The goals of the setup are:

* Separate PHP and Web server environment (NginX as a reverse proxy for PHP-FPM)
* Keep XDebug out of the main Docker setup, only activate it when needed
* Enable PHPStorm to run files and PHPUnit test with active XDebug breakpoints
* Enable setting breakpoints in PHPStorm for code that runs inside the Docker server environment
* Setup must still be usable from the command line.
* Checked-in code must not contain machine-specific configuration (e.g. IP addresse for `xdebug.remote_host`)
