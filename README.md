# CORS Plugin

<p align="left">
  <a href="https://octobercms.com/plugin/rluders-cors">
    <img src="https://img.shields.io/badge/OctoberCMS-Plugin-%23EE7203.svg">
  </a>
  <a href="https://www.patreon.com/rluders">
    <img src="https://img.shields.io/badge/Support_on-Patreon-green.svg">
  </a>
  <a href="https://opensource.org/licenses/MIT">
    <img src="https://img.shields.io/github/license/rluders/oc-cors-plugin.svg">
  </a>
</p>

This plugin provides a simple CORS support your for [OctoberCMS](http://www.octobercms.com) implementing the [barryvdh/laravel-cors](https://github.com/barryvdh/laravel-cors).

## Installation

### From OctoberCMS

To install from OctoberCMS you can [access the plugin page](https://octobercms.com/plugin/rluders-cors) or search for `CORS` in your OctoberCMS Dashboard and install the `RLuders.CORS` Plugin.

### From repository

1. Clone this repository:

`$ git clone https://github.com/rluders/oc-cors-plugin.git plugins/rluders/cors`

2. Install the composer dependencies:

`$ cd plugins/rluders/cors`
`$ composer install`

3. Configure it on your OctoberCMS Backend.

4. Use it on your `route.php`

```php

<?php

Route::group(['prefix' => 'api/e1', 'middleware' => ['\Barryvdh\Cors\HandleCors']], function(){
    // routes here
});

```

## LICENSE

MIT
