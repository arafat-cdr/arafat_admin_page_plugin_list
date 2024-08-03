### Arafat Admin Page Plugin List

	* This PLugin is useful When Plugin page Is Disable
	* and your customer want to see the list of 
	* Install plugin

### We can disable plugin page and Disable adding/Modifying Plugin By Below

```php
<?php


define( 'WP_DEBUG', false );

// define('DISALLOW_FILE_MODS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


// ----------------------------------------------------------

// No one can download plugin from plugin page

// ---------------------------------------------------------

function remove_plugins_menu() {
    remove_menu_page('plugins.php');
}
// add_action('admin_menu', 'remove_plugins_menu');

function redirect_from_plugins_page() {
    if (is_admin() && strpos($_SERVER['SCRIPT_NAME'], 'wp-admin/plugins.php') !== false) {
        wp_safe_redirect(admin_url()); // Redirect to the admin dashboard
        exit();
    }
}
// add_action('admin_init', 'redirect_from_plugins_page');


// ----------------------------------------------------------

// No one can download plugin from plugin page

// ---------------------------------------------------------



```