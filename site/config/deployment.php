<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Thotbox - Custom ExpressionEngine Deployment Bootstrap
| Version 2.0
|--------------------------------------------------------------------------
| Instructions:
| Add require(realpath(dirname(__FILE__) . '/../../../themes/site_themes/site/config/deployment.php')); to bottom default config.php and database.php
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Development Environment
|--------------------------------------------------------------------------
| Options:
| production - (live envirionment)
| tunneled -  (local files, ssh tunnel to database)
| local -  (local files, local database)
|--------------------------------------------------------------------------
*/

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