<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

$this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/main'), array(0 => 'ROLE_USER'), NULL);

return $instance;
