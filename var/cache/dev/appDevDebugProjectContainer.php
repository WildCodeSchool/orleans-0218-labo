<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP5k8plm\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP5k8plm/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerP5k8plm.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerP5k8plm\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerP5k8plm\appDevDebugProjectContainer(array(
    'container.build_hash' => 'P5k8plm',
    'container.build_id' => '25c59af2',
    'container.build_time' => 1530619695,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerP5k8plm');
