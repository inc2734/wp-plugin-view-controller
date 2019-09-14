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

## Filter hooks
### <prefix>view_args
```
add_filter(
	'<prefix>view_args',
	function( $args ) {
		return $args;
	}
);
```

### <prefix>view_render
```
add_filter(
	'<prefix>view_render',
	function( $html, $slug, $name, $vars ) {
		return $html;
	},
	10,
	4
);
```

## Action hooks
### <prefix>view_pre_render
```
add_action(
	'<prefix>view_pre_render',
	function( $args ) {
	}
);
```

### <prefix>view_post_render
```
add_action(
	'<prefix>view_post_render',
	function( $args ) {
	}
);
```

### <prefix>view_<slug>
```
add_action(
	'<prefix>view_<slug>',
	function( $name, $vars ) {
		?>
		HTML
		<?php
	},
	10,
	2
);
```

### <prefix>view_<slug>-<name>
```
add_action(
	'<prefix>view_<slug>',
	function( $vars ) {
		?>
		HTML
		<?php
	}
);
```
