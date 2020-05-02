<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.secrets_encrypt_from_local' shared service.

include_once \dirname(__DIR__, 7).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/framework-bundle/Command/SecretsEncryptFromLocalCommand.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

$this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

$instance->setName('secrets:encrypt-from-local');

return $instance;
