<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.messenger_consume_messages' shared service.

include_once \dirname(__DIR__, 7).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/messenger/Command/ConsumeMessagesCommand.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/messenger/MessageBusInterface.php';
include_once \dirname(__DIR__, 7).'/vendor/symfony/messenger/RoutableMessageBus.php';

$this->privates['console.command.messenger_consume_messages'] = $instance = new \Symfony\Component\Messenger\Command\ConsumeMessagesCommand(new \Symfony\Component\Messenger\RoutableMessageBus(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'messenger.bus.default' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService.php', true],
], [
    'messenger.bus.default' => '?',
]), ($this->services['messenger.default_bus'] ?? $this->load('getMessenger_DefaultBusService.php'))), ($this->privates['messenger.receiver_locator'] ?? ($this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), []);

$instance->setName('messenger:consume');

return $instance;
