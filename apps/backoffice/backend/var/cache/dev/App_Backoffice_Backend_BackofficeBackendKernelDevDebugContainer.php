<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDiMTL9D\App_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDiMTL9D/App_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDiMTL9D.legacy');

    return;
}

if (!\class_exists(App_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDiMTL9D\App_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer::class, App_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer::class, false);
}

return new \ContainerDiMTL9D\App_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer([
    'container.build_hash' => 'DiMTL9D',
    'container.build_id' => '9482408e',
    'container.build_time' => 1588432503,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDiMTL9D');
