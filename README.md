# wp_custom_theme_logo
Flexible integrate custom logo feature (which is available from 4.5 version) in WordPress theme.

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
