<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.gIC.p93' shared service.

return $this->privates['.service_locator.gIC.p93'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'cliente' => array('privates', '.errored..service_locator.gIC.p93.App\\Entity\\Cliente', NULL, 'Cannot autowire service ".service_locator.gIC.p93": it references class "App\\Entity\\Cliente" but no such service exists.'),
));