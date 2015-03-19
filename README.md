### 2.0 Changes

* Some additions to better support multiple development environments and version control
* Separate site URL and database configurations for each environment
* Handy new global variable (global_environment) for use in templates

### Description

Quick and dirty custom bootstrap to assist with the deployment and migration of ExpressionEngine websites.

* Groups theme files, templates, and add-ons into one location
* Assists migration by making absolute/server paths more dynamic
* Facilitates the easy employment of recommend security practices
* Disables member registration (default)
* Randomizes default member trigger (default)
* Creates a few global variables
* Centralizes commonly used configuration variables from config.php and database.php
* Various tweaks and fixes

### Important

If you plan on using this with an existing ExpressionEngine build, make sure to syncronize templates and make full file and database backups in advance. Better safe than sorry.

### Disclaimer

ExpressionEngine is an extremely flexible CMS, and most developers have their own way of doing things. This bootstrap is built primarily for my own use, based on my own preferences and practices. As such, please don't mistake any of my suggestions here as "best practices".

### Installation

1. Sync templates and backup files and database
2. Copy "site" folder to /themes/site_themes/
3. Modify database and environment settings in /themes/site_themes/site/config/deployment.php
4. Modify settings in /themes/site_themes/site/config/settings.php to your taste
5. Rename system folder and admin.php (optional/recommended)
6. Modify "$system_path" variable in /index.php and /admin.php (if changed)
7. Add the following to the bottom of config.php and database.php found in /system/expressionengine/config
```
require(realpath(dirname(__FILE__) . '/../../../themes/site_themes/site/config/deployment.php'));
```
8. Add .gitignore rule for /themes/site_themes/site/config/deployment.php if using git based version control and set deployment_environment in deployment.php for each environment (local, development server, production server, etc.)