# Custom Field Embedder

A lightweight WordPress plugin to embed custom field values into posts and pages using a simple shortcode.

WordPress custom fields are a powerful feature, but displaying their values on the front end typically requires theme edits or custom development. Custom Field Embedder removes that barrier. Once installed, drop a shortcode anywhere in a post or page to output the value of any custom field — plain text, HTML, JavaScript, or other markup — with no configuration required.

## Requirements

- WordPress 5.9 or higher
- PHP 7.4 or higher
- Tested up to WordPress 7.0

## Installation

1. Install Custom Field Embedder by uploading the `.zip` file via **Admin → Plugins → Add New**.
2. Activate the plugin on the **Admin → Plugins** screen.
3. Add a custom field to any post or page and assign a value.
4. Insert the shortcode where you want the value to appear.

## Usage

```
[custom_field_embedder field="YOUR_FIELD_NAME"]
```

Replace `YOUR_FIELD_NAME` with the name of the custom field you want to display.
