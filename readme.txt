=== Custom Field Embedder ===
Contributors: dalesandro
Tags: custom fields, post meta, meta, shortcode, custom field shortcode
Requires at least: 5.9
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 1.0.2
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Custom Field Embedder provides the capability to embed custom field values into pages and posts through a simple shortcode.

== Description ==
The **Custom Field Embedder** plugin for WordPress provides the capability to embed custom field values into pages and posts through a simple shortcode. The plugin is lightweight and it does not require any configuration, settings, scripts, or external resources to function.

**This plugin is designed for use by site administrators on sites where custom field values are controlled exclusively by trusted administrators.** Custom field values are output exactly as stored, including raw HTML and JavaScript, which is intentional behavior for admin-managed content such as embed codes, inline scripts, and dynamic HTML snippets.

Simply add the shortcode **[custom_field_embedder custom_field_name="CUSTOM FIELD NAME"]** to a new or existing page or post. Replace "CUSTOM FIELD NAME" with the actual name of a custom field associated with the page or post and the value of that custom field is embedded at that position in the page or post.

**Use cases include:**

* Injecting third-party embed codes or tracking scripts stored in custom fields
* Displaying dynamic HTML content without modifying template files
* Reusing structured field values across multiple pages or posts
* Keeping presentational code out of theme templates and in content-managed fields

== Installation ==
= Install =
1. Install Custom Field Embedder through the WordPress.org plugin repository or by uploading the .zip file using the Admin → Plugins → Add New function.
2. Activate Custom Field Embedder on the Admin → Plugins screen.

= Uninstall =
1. Deactivate the plugin on the Admin → Plugins screen. All plugin files will be retained.
2. Delete the plugin on the Admin → Plugins screen. This deletes both the plugin files. Since the plugin does not create any database settings, no database cleanup is required.

== Frequently Asked Questions ==
= The custom field value contains PHP code that wasn't executed by the shortcode =

The plugin does not execute any code found in custom field values. The plugin simply inserts the custom field value into a page or post as text. If the custom field value contains JavaScript, then the browser will interpret that code inline.

= Is this plugin safe for sites where editors or contributors can edit posts? =

This plugin is intended for administrator-controlled sites only. Custom field values are output unescaped by design, which means any HTML or JavaScript stored in a field will render in the browser. On sites where non-administrator users can create or edit custom fields, this could pose a security risk. Restrict custom field access using role management if needed.

== Screenshots ==
1. Custom Field Embedder - Custom Field.
2. Custom Field Embedder - Shortcode block.
3. Custom Field Embedder - Result.

== Changelog ==
= 1.0.2 =
* Bug fix: Corrected plugin textdomain string
* Minor code quality improvements

= 1.0.1 =
* Fixed plugin textdomain not loading due to incorrect hook registration
* Replaced use of extract() with explicit variable assignment
* Added null check for get_the_ID() to handle calls made outside of The Loop

= 1.0.0 =
* Initial Release