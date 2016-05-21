# wp_custom_theme_logo
Flexible integrate custom logo feature (which is available from 4.5 version) in WordPress theme.

## Description
*Issue:* Default the_custom_logo function using `class` = `custom-logo-link` and `custom-logo`. It's hard to integrate with existing framework as Bootstrap.

*Solution:* Instead of using `the_custom_logo()` default function, I used `wp_get_attachment_image` to get logo url. You can add `class` (like Bootstrap example: `navbar-brand`), `id` or `target"_blank"` to a logo.

## Usage

**Enable custom logo feature:**
Place code from functions.php to your theme's functions.php

**To display a custom logo:**
Copy code from header.php to where you want.
```
<?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
```

License: MIT
Author: http://khoipro.com
