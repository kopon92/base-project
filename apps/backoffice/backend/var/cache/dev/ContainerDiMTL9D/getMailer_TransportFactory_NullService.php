<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mailer.transport_factory.null' shared service.

include_once \dirname(__DIR__, 7).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/mailer/Transport/NullTransportFactory.php';

return $this->privates['mailer.transport_factory.null'] = new \Symfony\Component\Mailer\Transport\NullTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['http_client'] ?? $this->load('getHttpClientService.php')), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
