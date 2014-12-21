# Slack CLI [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/cleentfaar/slack-cli/tree/master/LICENSE.md)

Command-line application for interacting with the Slack API. Provides commands for all of the API methods currently available.

[![Build Status](https://img.shields.io/travis/cleentfaar/slack-cli/master.svg?style=flat-square)](https://travis-ci.org/cleentfaar/slack-cli)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/cleentfaar/slack-cli.svg?style=flat-square)](https://scrutinizer-ci.com/g/cleentfaar/slack-cli/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/cleentfaar/slack-cli.svg?style=flat-square)](https://scrutinizer-ci.com/g/cleentfaar/slack-cli)
[![Latest Version](https://img.shields.io/github/release/cleentfaar/slack-cli.svg?style=flat-square)](https://github.com/cleentfaar/slack-cli/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/cleentfaar/slack-cli.svg?style=flat-square)](https://packagist.org/packages/cleentfaar/slack-cli)


### Quick look

Sending a message to a Slack channel
```bash
slack.phar chat.postMessage general "Hello world!"
```

Update the application
```bash
slack.phar self.update
```

Check out the documentation below for more examples and instructions on how to install the `.phar` file.


### Documentation

- [Installation](CL/SlackCli/Resources/doc/installation.md) - Information on installing this package either globally or as a composer dependency.
- [Usage](CL/SlackCli/Resources/doc/usage.md) - A few simple examples on how to use some of the console commands provided by this package.

#### Detailed documentation

This package only provides a command-line interface to access the Slack API methods; if you want to get your hands dirty
on how to use the payloads and responses in your own application, check out the library that this package implements: [Slack API library](https://github.com/cleentfaar/slack-cli).


### Contributing

Got a good idea for this project? Found a nasty bug that needs fixing? That's great! Before submitting your PR however,
make sure it complies with the [contributing guide](CL/SlackCli/Resources/doc/contributing.md) to speed up the merging of your code.


### Related packages

- [Slack](https://github.com/cleentfaar/slack) - Main library package consisting of the API client and model classes that adhere to the Slack API specs.
- [SlackBundle](https://github.com/cleentfaar/CLSlackBundle) - Symfony Bundle providing integration with the [Slack library](https://github.com/cleentfaar/slack) above.


### Attributions

- The [Slack](https://slack.com/) staff, for making an awesome product and very clean API documentation.
- [MattKetmo](https://github.com/MattKetmo), for his [awesome article](http://moquet.net/blog/distributing-php-cli/)
on distributing CLI applications and his `bump-version.sh` script.
