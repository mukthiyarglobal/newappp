<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGn1nfpq\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGn1nfpq/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerGn1nfpq.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerGn1nfpq\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerGn1nfpq\appProdProjectContainer([
    'container.build_hash' => 'Gn1nfpq',
    'container.build_id' => '4de9bb4e',
    'container.build_time' => 1697189135,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGn1nfpq');