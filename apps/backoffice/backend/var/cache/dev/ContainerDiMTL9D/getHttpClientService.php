<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'http_client' shared service.

include_once \dirname(__DIR__, 7).'/vendor/symfony/http-client-contracts/HttpClientInterface.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/http-client/HttpClient.php';

$this->privates['http_client'] = $instance = \Symfony\Component\HttpClient\HttpClient::create([], 6);

$instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

return $instance;
