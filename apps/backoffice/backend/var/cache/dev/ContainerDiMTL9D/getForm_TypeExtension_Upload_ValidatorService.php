<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_extension.upload.validator' shared service.

include_once \dirname(__DIR__, 7).'/vendor/symfony/form/FormTypeExtensionInterface.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/form/AbstractTypeExtension.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php';

return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->load('getTranslatorService.php')), 'validators');
