# WP Plugin View Controller

[![Build Status](https://travis-ci.org/inc2734/wp-plugin-view-controller.svg?branch=master)](https://travis-ci.org/inc2734/wp-plugin-view-controller)
[![Latest Stable Version](https://poser.pugx.org/inc2734/wp-plugin-view-controller/v/stable)](https://packagist.org/packages/inc2734/wp-plugin-view-controller)
[![License](https://poser.pugx.org/inc2734/wp-plugin-view-controller/license)](https://packagist.org/packages/inc2734/wp-plugin-view-controller)

## Install
```
$ composer require inc2734/wp-plugin-view-controller
```

## How to use
```
use Inc2734\WP_Plugin_View_Controller\Bootstrap;

$bootstrap = new Bootstrap(
  [
    'prefix' => 'prefix_',
    'path'   => __DIR__ . '/templates/',
  ]
);

$bootstrap->render( $slug, $name, $args );
```
