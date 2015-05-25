<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Thotbox - Custom ExpressionEngine Deployment Bootstrap
| Version 2.1
|--------------------------------------------------------------------------
| Config
|--------------------------------------------------------------------------
*/

if (isset($config)) {

    // Site Status
    $config['is_system_on'] = 'y';

    // Site Index
    $config['index_page'] = '';

    // Site Label
    $config['site_label'] = 'Site Label';

    // Server Path
    $config['server_path'] = $_SERVER['DOCUMENT_ROOT'];

    // System Folder
    $config['system_folder'] = 'system';

    // admin.php
    $config['cp_url'] = $config['site_url'].'admin.php';

    // Theme Folder
    $config['theme_folder_path'] = $config['server_path'].'/themes/';
    $config['theme_folder_url'] = $config['site_url'].'/themes/';

    // Control Panel Theme
    $config['cp_theme'] = 'default';

    // Addon Paths
    $config['url_third_themes'] = $config['theme_folder_url'].'site_themes/site/addons/themes/';
    $config['path_third_themes'] = $config['theme_folder_path'].'site_themes/site/addons/themes/';
    $config['third_party_path'] = $config['theme_folder_path'].'site_themes/site/addons/system/';

    // Templates and Snippets
    $config['hidden_template_indicator'] = '_';
    $config['save_tmpl_files'] = 'y';
    $config['tmpl_file_basepath'] = $config['theme_folder_path'].'site_themes/site/templates/';
    $config['snippet_file_basepath'] = $config['theme_folder_path'].'site_themes/site/snippets/';

    // Upload Preferences (create in EE first, and add array items for multiple upload destinations)
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

    // Member Trigger (prevents spam registrations)
    $config['profile_trigger'] = md5(mt_rand());

    // TTL
    $config['cp_session_ttl'] = 3600;
    $config['user_session_ttl'] = 3600;

    // Disable CSRF Protection (set to 'y' to fix freeform expired form errors)
    $config['disable_csrf_protection'] = 'n';

    // CAPTCHA
    $config['captcha_rand'] = 'y';
    $config['captcha_require_members'] = 'y';

    // Hon-ee Pot Config
    $config['honeepot_field'] = 'field_name';
    $config['honeepot_error'] = 'Bot submissions blocked.';

    // Encryption Key (63 random alpha-numeric - https://www.grc.com/passwords.htm)
    $config['encryption_key'] = '';

    // Misc Paths
    $config['avatar_path'] = $config['server_path'].'/images/avatars/';
    $config['avatar_url'] = $config['site_url'].'/images/avatars';
    $config['photo_path'] = $config['server_path'].'/images/member_photos/';
    $config['photo_url'] = $config['site_url'].'/images/member_photos/';
    $config['sig_img_path'] = $config['server_path'].'/images/signature_attachments/';
    $config['sig_img_url'] = $config['site_url'].'/images/signature_attachments/';
    $config['captcha_path'] = $config['server_path'].'/images/captchas/';
    $config['captcha_url'] = $config['site_url'].'/images/captchas/';
    define('deployment_server_path', $config['server_path']);
    define('deployment_system_folder', $config['system_folder']);

    // Global Variables
    global $assign_to_config;
    $assign_to_config['global_vars'] = array(
        'global_theme_url' => '/themes/site_themes/site',
        'global_theme_path' => $config['theme_folder_path'].'site_themes/site',
        'global_environment' => deployment_environment
    );
}

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/

if (isset($db['expressionengine'])) {   
    $active_group = 'expressionengine';
    $active_record = TRUE;
    $db['expressionengine']['dbdriver'] = 'mysql';
    $db['expressionengine']['pconnect'] = FALSE;
    $db['expressionengine']['dbprefix'] = 'exp_';
    $db['expressionengine']['swap_pre'] = 'exp_';
    $db['expressionengine']['db_debug'] = TRUE;
    $db['expressionengine']['cache_on'] = FALSE;
    $db['expressionengine']['autoinit'] = FALSE;
    $db['expressionengine']['char_set'] = 'utf8';
    $db['expressionengine']['dbcollat'] = 'utf8_general_ci';
    $db['expressionengine']['cachedir'] = deployment_server_path.'/'.deployment_system_folder.'/expressionengine/cache/db_cache/';
}