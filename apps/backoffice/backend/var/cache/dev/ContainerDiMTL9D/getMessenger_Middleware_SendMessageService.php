<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'messenger.middleware.send_message' shared service.

include_once \dirname(__DIR__, 7).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
include_once \dirname(__DIR__, 7).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/messenger/Middleware/SendMessageMiddleware.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

$this->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator([], ($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

$instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

return $instance;
