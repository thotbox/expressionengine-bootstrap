<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Thotbox - Custom ExpressionEngine Deployment Bootstrap
| Version 2.1
|--------------------------------------------------------------------------
| Instructions - Add to bottom default config.php and database.php:
| require(realpath(dirname(__FILE__) . '/../../../themes/site_themes/site/config/deployment.php')); 
| Tweak options in settings.php as needed
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Deployment Environment
|--------------------------------------------------------------------------
| Options:
| production - (live server)
| development -  (development server)
| tunneled -  (local files, ssh tunnel to database on production/dev server)
| local -  (local files, local database)
|--------------------------------------------------------------------------
*/

// Set environment

define('deployment_environment', 'production');

// Production

if (isset($config) && deployment_environment == 'production') {
    $config['site_url'] = 'http://hostname.com';
}

if (isset($db['expressionengine']) && deployment_environment == 'production') {   
    $db['expressionengine']['hostname'] = 'localhost';
    $db['expressionengine']['username'] = 'db_user';
    $db['expressionengine']['password'] = 'db_password';
    $db['expressionengine']['database'] = 'db_name';
}

// Development

if (isset($config) && deployment_environment == 'development') {
    $config['site_url'] = 'http://hostname.com';
}

if (isset($db['expressionengine']) && deployment_environment == 'development') {   
    $db['expressionengine']['hostname'] = 'localhost';
    $db['expressionengine']['username'] = 'db_user';
    $db['expressionengine']['password'] = 'db_password';
    $db['expressionengine']['database'] = 'db_name';
}

// Tunneled

if (isset($config) && deployment_environment == 'tunneled') {
    $config['site_url'] = 'http://hostname';
}

if (isset($db['expressionengine']) && deployment_environment == 'tunneled') {   
    $db['expressionengine']['hostname'] = '127.0.0.1:3307';
    $db['expressionengine']['username'] = 'db_user';
    $db['expressionengine']['password'] = 'db_password';
    $db['expressionengine']['database'] = 'db_name';
}

// Local

if (isset($config) && deployment_environment == 'local') {
    $config['site_url'] = 'http://hostname';
}

if (isset($db['expressionengine']) && deployment_environment == 'local') {   
    $db['expressionengine']['hostname'] = 'localhost';
    $db['expressionengine']['username'] = 'db_user';
    $db['expressionengine']['password'] = 'db_password';
    $db['expressionengine']['database'] = 'db_name';
}

require('settings.php');