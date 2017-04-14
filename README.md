BjyProfiler
===========

Master:
[![Build Status](https://travis-ci.org/andrey-mokhov/bjy-profiler.svg?branch=master)](https://travis-ci.org/andrey-mokhov/bjy-profiler)
[![Coverage Status](https://coveralls.io/repos/github/andrey-mokhov/bjy-profiler/badge.svg?branch=master)](https://coveralls.io/github/andrey-mokhov/bjy-profiler)

Provides Zend\Db adapters with extensions for database query profiling, as well as a profiler similar to ZF1's Zend\_Db\_Profiler.
I ported much of this code from ZF1's Zend_Db.

Note: this module now works with Zend\Db's built-in profiler.

**Note**: PHP >= 5.5 is required for stack traces with query profiles.

Composer/Packagist Users
========================

```console
composer require --dev andrey-mokhov/bjy-profiler
```

Configuration & Usage
---------------------
Add `BjyProfiler` to your `development.config.php` in section `modules`, example:
```php
return [
    // Additional modules to include when in development mode
    'modules' => [
        'ZendDeveloperTools',
        'BjyProfiler',
    ],
    // Configuration overrides during development mode
    'module_listener_options' => [
        'config_glob_paths' => [realpath(__DIR__) . '/autoload/{,*.}{global,local}-development.php'],
        'config_cache_enabled' => false,
        'module_map_cache_enabled' => false,
    ],
];
```


```php
$profiler = $sl->get('Zend\Db\Adapter\Adapter')->getProfiler();
$queryProfiles = $profiler->getQueryProfiles();
```
