<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'easyadmin.listener.request_post_initialize' shared service.

return $this->services['easyadmin.listener.request_post_initialize'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
