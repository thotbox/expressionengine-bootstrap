
## Description

Quick and dirty custom bootstrap to assist with the deployment and migration of ExpressionEngine websites.

* Groups theme files, templates, and add-ons into one location
* Assists migration by making absolute/server paths more dynamic
* Facilitates the easy employment of recommend security practices such as renaming system directy and admin.php
* Disables member registration (default)
* Randomizes default member trigger (default)
* Creates a few handy global variables
* Centralizes commonly used configuration variables from config.php and database.php

### Important

If you plan on using this with an existing ExpressionEngine build, make sure to syncronize templates and make full file and database backups in advance. Better safe than sorry.

### Disclaimer

ExpressionEngine is an extremely flexible CMS, and most developers have their own way of doing things. This bootstrap is built primarily for my own use, based on my own preferences and practices. As such, please don't mistake any of my suggestions here as "best practices".

### Installation

1. Sync templates and backup files and database
2. Copy "site" folder to /themes/site_themes/
3. Modify settings in /themes/site_themes/site/config/deployment.php to your taste
4. Modify "$system_path" variable in /index.php and /admin.php to match settings in deployment.php
5. Rename system folder and admin.php to match settings in deployment.php
6. Add the following to the bottom of config.php and database.php found in /your_system_folder/expressionengine/config
```
require(realpath(dirname(__FILE__) . '/../../../themes/site_themes/site/config/deployment.php'));
```
or copy sample files found in /themes/site_themes/site/config/ee
7. (optional) Copy "nerdery" folder from /themes/site_themes/site/addons/cp to /themes/cp_themes

### Additional Notes

I've included the Nerdery control panel theme with this package because I use it for all of my EE builds because the default CP themes are horribad. I take no credit for this theme. I didn't build it, but I do highly recommend it.

For more information: https://github.com/litzinger/Nerdery-Theme