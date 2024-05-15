# WP Delog

WP Delog is a WordPress plugin that simplifies code debugging by generating a log file in the WordPress webroot directory.

## Requirements

- PHP 7.0 or higher
- WordPress 5.0 or higher

## Installation

### Via Composer

1. **Require the plugin** by running the following Composer command:

    ```sh
    composer require raguzman/wp-delog
    ```

2. **Activate the plugin** from the WordPress admin dashboard.

### Manual Installation

1. Download the plugin from the [GitHub repository](https://github.com/raguzman/wp-delog).

2. Upload the plugin files to the `/wp-content/plugins` directory.

3. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

To use, simply include the `delog($var)` function in your code and check the `delog.log` file in your WordPress root directory
