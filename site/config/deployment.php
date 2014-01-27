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
| ** Copy Nerdery theme from site/addons/cp to /themes/cp_themes **
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

    // Global Variables
    global $assign_to_config;
    $assign_to_config['global_vars'] = array(
        'global_theme_url' => '/themes/site_themes/site',
        'global_theme_path' => $config['theme_folder_path'].'site_themes/site',
        'global_disable_default' => 'disable="categories|member_data|pagination|trackbacks"',
        'global_disable_all' => 'disable="categories|custom_fields|member_data|pagination|trackbacks"',
        'global_cache' => 'cache="yes" refresh="60"',
        'global_analytics_key' => 'UA-XXXXXXXXX-1',
        'global_analytics_domain' => 'example.com',
        'global_cm_slug' => 'XXXXXX',
        'global_typography_id' => 'XXXXXX/XXXX',
        'global_typekit_id' => 'XXXXXXX',
        'global_jquery_url' => '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'
    );

    // TTL
    $config['cp_session_ttl'] = 3600;
    $config['user_session_ttl'] = 3600;

}

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/

if(isset($db['expressionengine']))
{   
    $db['expressionengine']['hostname'] = 'localhost';
    $db['expressionengine']['username'] = 'db_user';
    $db['expressionengine']['password'] = 'db_pass';
    $db['expressionengine']['database'] = 'db_name';
    $db['expressionengine']['cachedir'] = $config['server_path'].'/'.$config['system_folder'].'/expressionengine/cache/db_cache/';
}
