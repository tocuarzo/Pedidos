<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.8crJbMu' shared service.

return $this->privates['service_locator.8crJbMu'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('authUtils' => function () {
    return ($this->services['security.authentication_utils'] ?? $this->load(__DIR__.'/getSecurity_AuthenticationUtilsService.php'));
}));
