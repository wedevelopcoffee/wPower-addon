<?php
/**
 * wPower Bootstrap
 *
 * @copyright Copyright (c) WeDevelopCoffee 2018
 */

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once('init.php');

/**
 * Define WeDevelop.coffee configuration.
 *
 * @return array
 */
function wPower_config()
{
    return array(
        'name' => 'wPower lazy launcher', // Display name for your module
        'description' => 'Lazy launches the wPower framework.', // Description displayed within the admin interface
        'author' => 'WeDevelop.coffee', // Module author name
        'language' => 'english', // Default language
        'version' => '1.0.3', // Version number
    );
}
