<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler' shared service.

return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->load('getPsFacebookService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->load('getPsFacebook_ContextService.php')) && false ?: '_'});
