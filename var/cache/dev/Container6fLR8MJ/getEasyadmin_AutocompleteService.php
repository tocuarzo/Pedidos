<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'easyadmin.autocomplete' shared service.

return $this->services['easyadmin.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Autocomplete(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), new \EasyCorp\Bundle\EasyAdminBundle\Search\Finder(($this->services['easyadmin.query_builder'] ?? $this->load(__DIR__.'/getEasyadmin_QueryBuilderService.php')), ($this->services['easyadmin.paginator'] ?? $this->services['easyadmin.paginator'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator())), ($this->services['easy_admin.property_accessor'] ?? $this->getEasyAdmin_PropertyAccessorService()));
