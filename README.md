# CORS Plugin

<p align="left">
  <a href="https://github.com/rluders/wn-cors-plugis">
    <img src="https://img.shields.io/badge/WinterCMS-Plugin-%23EE7203.svg">
  </a>
  <a href="https://www.patreon.com/rluders">
    <img src="https://img.shields.io/badge/Support_on-Patreon-green.svg">
  </a>
  <a href="https://opensource.org/licenses/MIT">
    <img src="https://img.shields.io/github/license/rluders/oc-cors-plugin.svg">
  </a>
</p>

This plugin provides a simple CORS support your for [WinterCMS](https://wintercms.com/) implementing the [barryvdh/laravel-cors](https://github.com/barryvdh/laravel-cors).

## Installation

1. Use the composer

```sh
$ composer require rluders/cors
```

2. Configure it on your OctoberCMS Backend.

4. Use it on your `route.php`

```php

<?php

Route::group(['prefix' => 'api/e1', 'middleware' => ['\Barryvdh\Cors\HandleCors']], function(){
    // routes here
});

```

## LICENSE

MIT
