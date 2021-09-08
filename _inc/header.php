<a href="#main" class="skip-to-content u-screen-reader-text" title="Skip to content">
    Skip to content
</a>

<a href="#footer" class="skip-to-content u-screen-reader-text" title="Skip to footer navigation">
    Skip to footer navigation
</a>

<div class="c-site-header-wrapper">
<header class="c-site-header c-site-header--light-background">
    <div class="c-site-header__logo">
        <a href="/" class="site-logo">
            <div>The</div>
            Sybarite
        </a>
    </div>

    <?php /* <button class="c-nav-mobile-button js__nav-mobile-button u-js-only">
            // include 'img/svg/nav.php'; <-- you can find this in my framework
    </button> */ ?>

    <nav aria-label="Main navigation" class="c-site-header__nav">
        <ul>
            <?php /* 
                Here you can add the class current-menu-item by the calling the header with a variable like this:
                $current_nav = 'catalogue';
                include '_inc/header.php';
            */ ?>
            <?php $nav_name = 'Experiences'; ?>
            <li<?php if ($current_nav === $nav_name) { echo ' class="current-menu-item"'; } ?>>
                <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                <ul class="c-mega-menu">
                    <!-- <li>
                        <a href="">hello</a>
                    </li> -->
                </ul>
            </li>

            <?php
                $nav_name = 'Magazine'; include '_inc/nav-links.php';
                $nav_name = 'International'; include '_inc/nav-links.php';
                // $nav_name = 'Africa'; include '_inc/nav-links.php';
                $nav_name = 'Clubs'; include '_inc/nav-links.php';
                $nav_name = 'Shop'; include '_inc/nav-links.php';
                include 'img/svg/search.php';
            ?>
        </ul>
    </nav>

    <div class="c-site-header__cta">
        <div class="btn">
            <a href="/champagne-club-logged-in.php">
                Login
            </a>
        </div>
    </div>

</header>
</div>