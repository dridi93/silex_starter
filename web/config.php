<?php 

/**
*	Twig registration
*/

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

/**
*	Swiftmailer
*/ 

$app->register(new Silex\Provider\SwiftmailerServiceProvider());
