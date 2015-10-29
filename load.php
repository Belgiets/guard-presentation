<?php

use AppBundle\Entity\User;

$loader = require __DIR__.'/app/autoload.php';
include_once __DIR__.'/app/bootstrap.php.cache';

$kernel = new AppKernel('dev', true);
$kernel->boot();

$container = $kernel->getContainer();

$em = $container->get('doctrine.orm.entity_manager');

$user = new User('weaverryan', 'ryan@knpuniversity.com');
$em->persist($user);
$em->flush();

