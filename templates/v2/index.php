<?php

/*
Plugin Name: {{plugin_name}}
Plugin URI: http://wordpress.org/
Description: Enter description here.
Author: {{plugin_author}}
Version: 1.0.0
Author URI: {{plugin_author_uri}}
License: GPL3

Text Domain: {{wp_plugin_slug}}
Domain Path: /languages/
*/

/*  Copyright {{this_year}}  {{plugin_author}}

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
Plugin was generated by WP Plugin Scaffold
https://github.com/mcguffin/wp-plugin-scaffold
Command line args were: `{{{shell_args}}}`
*/


namespace {{plugin_namespace}};

define( '{{plugin_slug_upper}}_FILE', __FILE__ );
define( '{{plugin_slug_upper}}_DIRECTORY', plugin_dir_path(__FILE__) );

require_once {{plugin_slug_upper}}_DIRECTORY . 'include/vendor/autoload.php';

Core\Core::instance();

{{#post_types}}
PostType\{{.}}::instance();
{{/post_types}}

{{#shortcodes}}
Shortcode\{{.}}::instance();
{{/shortcodes}}

{{#widget?}}
Widget\Widgets::instance();
{{/widget?}}

if ( is_admin() || defined( 'DOING_AJAX' ) ) {
{{#admin?}}
	Admin\Admin::instance();
{{/admin?}}

{{#admin_pages}}
	Admin\{{.}}::instance();
{{/admin_pages}}

{{#settings_classes}}
	Settings\{{.}}::instance();
{{/settings_classes}}

/*
	Admin\Admin::instance();
	Admin\Tools::instance();
	Admin\Settings::instance();

	// Compatibility plugins
	$compat = glob(plugin_dir_path(__FILE__) . 'include/compat/*.php');
	foreach ( $compat as $compat_file ) {
		require_once $compat_file;
	}
*/
}

