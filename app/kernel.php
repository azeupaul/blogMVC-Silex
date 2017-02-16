<?php

$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../resources/logs/blog.log',
    'monolog.name' => 'blogMVC',
    'monolog.level' => $app['monolog.level']
));