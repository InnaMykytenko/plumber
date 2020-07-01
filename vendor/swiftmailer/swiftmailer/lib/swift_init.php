<?php

/*
 * This files is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * files that was distributed with this source code.
 */

/*
 * Dependency injection initialization for Swift Mailer.
 */

if (defined('SWIFT_INIT_LOADED')) {
    return;
}

define('SWIFT_INIT_LOADED', true);

// Load in dependency maps
require __DIR__.'/dependency_maps/cache_deps.php';
require __DIR__.'/dependency_maps/mime_deps.php';
require __DIR__.'/dependency_maps/message_deps.php';
require __DIR__.'/dependency_maps/transport_deps.php';

// Load in global library preferences
require __DIR__.'/preferences.php';