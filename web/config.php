<?php 

/**
*	Twig registration
*/

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => [__DIR__.'/views', __DIR__.'/views/commons'],
));

/**
*	Asset
*/

$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version' => 'v1',
    'assets.named_packages' => array(
        'css' => array('base_path' => '/assets/css'),
        'js' => array('base_path' => '/assets/js'),
        'images' => array('base_path' => '/assets/images'),
    ),
));

/**
*	Swiftmailer
*/ 

$app->register(new Silex\Provider\SwiftmailerServiceProvider());
