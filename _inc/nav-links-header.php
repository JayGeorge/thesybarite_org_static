<?php
/* Notes...

    - Outputs URL and nav name using a passed variable
    - Conditionally outputs '.php' if we're using Laravel locally. This is because we're using Laravel locally and I can't figure out this htaccess rule in Laravel:
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME}.php -f
    RewriteRule ^(.+)$ $1.php [L,QSA]

*/
?>
<li class="c-site-header__animate-staggered<?php if ($current_nav === $nav_name) { echo ' current-menu-item'; } ?>">
    <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name)); if(($GLOBALS['using_laravel']) === true && ($GLOBALS['local']) === true) { echo '.php'; } ?>"><?php echo $nav_name; ?></a>
</li>