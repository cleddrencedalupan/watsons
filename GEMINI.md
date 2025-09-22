# Project: watsonsbrohub.com

This document outlines the details of the `watsonsbrohub.com` project, including server configuration, database credentials, and the steps taken to resolve a broken WordPress migration.

## 1. Project Overview

- **Website:** `https://watsonsbrohub.com`
- **Problem:** The initial problem was a broken WordPress migration that resulted in "Page not found" errors, particularly affecting the `wp-admin` area.
- **Resolution:** A fresh WordPress installation was performed, followed by the transfer and review of the custom theme.

## 2. Server and Software Versions

- **Operating System:** Ubuntu 24.04 (from mysql version)
- **Web Server:** Apache (deduced from virtual host configurations)
- **PHP Version:** 8.1.33
- **MySQL Version:** 8.0.43
- **WordPress Version:** 6.8.2

## 3. Database Credentials

- **Database Name:** `app_db`
- **Username:** `cleddrence`
- **Password:** `limangminutolangsapatna`
- **Host:** `localhost`

## 4. WordPress Theme: watsons-custom-theme

The `watsons-custom-theme` is a custom-developed theme for the website.

### 4.1. Theme Files

- `js/`
- `custom-home.js`
- `footer.php`
- `front-page.php`
- `functions.php`
- `header.php`
- `index.php`
- `page.php`
- `style.css`

### 4.2. Issues Identified and Resolved

During the theme review, the following issues were identified and fixed:

- **Hardcoded Attachment ID:** In `front-page.php`, a hardcoded attachment ID (`20`) was used to display a header image. This was replaced with a dynamic call to `get_header_image()` to prevent broken images if the attachment does not exist.
- **Hardcoded Background Image URL:** In `style.css`, a hardcoded and future-dated URL was used for the background image, which would have resulted in a broken image. The `background-image` property was removed from the `body` selector to resolve this.

## 6. PHP and Web Server Configuration

- **Web Server:** Apache
- **PHP Execution:** PHP code is executed through the Apache `mod_php` module. The specific version used by Apache is 8.1.33.
- **Document Root:** The main document root for the `watsonsbrohub.com` website is `/var/www/html/watsonsbrohub.com`.
- **Virtual Host:** The Apache virtual host configuration for `watsonsbrohub.com` is located in `/etc/apache2/sites-available/watsonsbrohub.com.conf` and `/etc/apache2/sites-available/watsonsbrohub.com-le-ssl.conf`. The configuration enables `AllowOverride All`, which allows for the use of `.htaccess` files.
- **SSL:** The SSL certificate for `https://watsonsbrohub.com` is provided by Let's Encrypt and is configured in `/etc/apache2/sites-available/watsonsbrohub.com-le-ssl.conf`.
