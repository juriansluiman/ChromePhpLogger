ChromePhp writer for Zend\Log
===
This module provides an adapter to use ChromePhp in the Zend Framework 2 as
writer for Zend\Log. The module provides also a formatter to map the Zend\Log
priorities to the so-called severities of ChromePhp.

Installation
---
It is the easiest way to add this module as submodule to your ZF2.0 project, if
you use git yourself. Then, the only thing you need is

    cd to/your/project
    git submodule add --recursive git://github.com/juriansluiman/ChromePhpLogger.git modules/vendor/ChromePhpLogger

Then, open your configs/application.config.php and add the module ChromePhpLogger
to your modules configuration.

If you don't use git for your own project, clone the repository, add the folder
to your modules path.

    cd path/to/storage
    git clone --recursive git://github.com/juriansluiman/ChromePhpLogger.git

Add the path/to/storage to your modules path and include the module in your
application.config.php.

Usage
---
To use this writer for Zend\Log, you can do something like this:

    use Zend\Log\Logger,
        ChromePhpLogger\Log\Writer\ChromePhp as Writer;

    $log = Logger::factory(array(
        new Writer
    ));

Then you can log to ChromePhp:

    // Assume $log is instantiated as above
    $log->log('Hello World!', Logger::INFO);

DI
---
You should be able to set up the configuration with DI as well. This is not
documentated, will be online soon.