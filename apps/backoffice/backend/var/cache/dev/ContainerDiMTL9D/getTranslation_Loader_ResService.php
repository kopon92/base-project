<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.loader.res' shared service.

include_once \dirname(__DIR__, 7).'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';

return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
