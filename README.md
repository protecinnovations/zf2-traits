# ZF2 Traits

[![Build Status](https://travis-ci.org/protecinnovations/zf2-traits.png)](https://travis-ci.org/protecinnovations/zf2-traits)

[Zend Framework 2](http://framework.zend.com) is awesome. PHP 5.4 is also awesome. Combine both, using new PHP 5.4 features to make developing with Zend Framework 2 more fun!

## Installation

Add `"protec/zf2-traits": "dev-master"` to your `composer.json` file and run `php composer.phar update`.

## Awareness Traits

Zend Framework 2 has several *AwareTraits, used to automatically inject * into your classes when loaded via the service locator. These traits decrease code duplication by providing a standard implementation for these interfaces. Usage is pretty simple too.
Just take the full name of the interface (including namespace), replace the 'Interface' part with 'Trait', and the '\Zend\' part with '\Protec\ZF2Trait\', and use this trait within your class:

```php

class MyClass implements \Zend\ServiceManager\ServiceLocatorAwareInterface
{
    use \Protec\ZF2Trait\ServiceManager\ServiceLocatorAwareTrait;
}

```
