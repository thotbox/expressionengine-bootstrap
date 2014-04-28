<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Thotbox - Custom ExpressionEngine Deployment Bootstrap
|--------------------------------------------------------------------------
|
| ** Add to default config.php and database.php or copy templates from site/config/ee **
| require(realpath(dirname(__FILE__) . '/../../../themes/site_themes/site/config/deployment.php'));
|
| ** Rename system folder. Change in index.php and admin.php **
| $system_path = './your_system_folder';
|
| ** Rename admin.php to your_admin_filename.php **
|
| ** Create /uploads and /uploads/made folders and set permissions **
|
*/

/*
|--------------------------------------------------------------------------
| Config
|--------------------------------------------------------------------------
*/

if(isset($config)) {

    // Site Status
    $config['is_system_on'] = 'y';

    // Site URL
    $config['site_url'] = 'http://example.com';

    // Site Index
    $config['index_page'] = '';

    // Site Label
    $config['site_label'] = 'Site Label';

    // Server Path
    $config['server_path'] = $_SERVER['DOCUMENT_ROOT'];

    // System Folder
    $config['system_folder'] = 'your_system_folder';

    // admin.php
    $config['cp_url'] = "http://example.com/your_admin_filename.php";

    // Theme Folder
    $config['theme_folder_path'] = $config['server_path'].'/themes/';
    $config['theme_folder_url'] = $config['site_url'].'/themes/';

    // Control Panel Theme
    $config['cp_theme'] = 'nerdery';

    // Addon Paths
    $config['url_third_themes'] = $config['theme_folder_url'].'site_themes/site/addons/themes/';
    $config['path_third_themes'] = $config['theme_folder_path'].'site_themes/site/addons/themes/';
    $config['third_party_path'] = $config['theme_folder_path'].'site_themes/site/addons/system/';

    // Templates and Snippets
    $config['hidden_template_indicator'] = '_';
    $config['save_tmpl_files'] = 'y';
    $config['tmpl_file_basepath'] = $config['theme_folder_path'].'site_themes/site/templates/';
    $config['snippet_file_basepath'] = $config['theme_folder_path'].'site_themes/site/snippets/';

    // Upload Preferences
    $config['upload_preferences'] = array(
        1 => array(
            'name' => 'Main Uploads',
            'server_path' => $config['server_path'].'/uploads/',
            'url' => '/uploads/'
        )
    );

    // CE Image
    $config['ce_image_cache_dir'] = '/uploads/made/';
    $config['ce_image_memory_limit'] = 64;
    $config['ce_image_quality'] = 70;

    // Member Registration
    $config['allow_registration'] = 'n';

    // Member Trigger - Prevents Spam Registrations
    $config['profile_trigger'] = md5(mt_rand());

    // TTL
    $config['cp_session_ttl'] = 3600;
    $config['user_session_ttl'] = 3600;

    // Disable CSRF Protection (Freeform Fix)
    $config['disable_csrf_protection'] = 'y';

    // Encryption Key (63 random alpha-numeric - https://www.grc.com/passwords.htm)
    $config['encryption_key'] = '';

    // Global Variables
    global $assign_to_config;
    $assign_to_config['global_vars'] = array(
        'global_theme_url' => '/themes/site_themes/site',
        'global_theme_path' => $config['theme_folder_path'].'site_themes/site',
        'global_disable_default' => 'disable="categories|member_data|pagination|trackbacks"',
        'global_disable_all' => 'disable="categories|custom_fields|member_data|pagination|trackbacks"',
        'global_cache' => 'cache="yes" refresh="60"'
    );
}

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/

if(isset($db['expressionengine']))
{   
    $active_group = 'expressionengine';
    $active_record = TRUE;
    $db['expressionengine']['hostname'] = 'localhost';
    $db['expressionengine']['username'] = 'db_user';
    $db['expressionengine']['password'] = 'db_pass';
    $db['expressionengine']['database'] = 'db_name';
    $db['expressionengine']['dbdriver'] = 'mysql';
    $db['expressionengine']['pconnect'] = FALSE;
    $db['expressionengine']['dbprefix'] = 'exp_';
    $db['expressionengine']['swap_pre'] = 'exp_';
    $db['expressionengine']['db_debug'] = TRUE;
    $db['expressionengine']['cache_on'] = FALSE;
    $db['expressionengine']['autoinit'] = FALSE;
    $db['expressionengine']['char_set'] = 'utf8';
    $db['expressionengine']['dbcollat'] = 'utf8_general_ci';
    $db['expressionengine']['cachedir'] = $config['server_path'].'/'.$config['system_folder'].'/expressionengine/cache/db_cache/';
}

