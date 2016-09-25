<?php 

/**
*	Twig registration
*/

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => [__DIR__.'/views', __DIR__.'/views/commons'],
));

/**
*	Swiftmailer
*/ 

$app->register(new Silex\Provider\SwiftmailerServiceProvider());
