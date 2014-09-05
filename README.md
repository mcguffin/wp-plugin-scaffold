Plugin Scaffold
===============

Create a basic Wordpress plugin from the command line.

Usage:
```
$ python ./plugin.py "Plugin Name" [options]
```
# options: #
- `--force`         Override existing plugin
- `admin_css`       Enqueue css globally in admin
- `admin_js`        Enqueue js globally in admin
- `frontend_css`    Enqueue css in frontend
- `frontend_js`     Enqueue js in frontend
- `settings_css`    Enqueue css on settings page (only if settings is present)
- `settings_js`     Enqueue js on settings page (only if settings is present)
- `admin` 			Create an admin class
- `settings` | `settings_section` Create Settings section
- `settings_page`	Create Settings page
- `shortcodes:a_shortcode[:another_shortcode[:..]]` Add shortcode handler(s)

- `widget`			Register a Widget

