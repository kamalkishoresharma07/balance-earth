<?php
/**
 * Entry point for static resources (JS, CSS, etc.)
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

require realpath(__DIR__) . '/../app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
/** @var \Magento\Framework\App\StaticResource $app */
$app = $bootstrap->createApplication(\Magento\Framework\App\StaticResource::class);
$bootstrap->run($app);

<IfModule mod_rewrite.c>
    RewriteEngine On

    RewriteBase /pub/static
    # Remove signature of the static files that is used to overcome the browser cache
    RewriteRule ^version.+?/(.+)$ $1 [L]

    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-l

    RewriteRule .* ../static.php?resource=$0 [L]
</IfModule>
