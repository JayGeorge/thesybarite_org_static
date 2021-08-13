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
            <?php 
                $nav_name = 'Experiences'; include '_inc/nav-links.php';
                $nav_name = 'Magazine'; include '_inc/nav-links.php';
                // $nav_name = 'Africa'; include '_inc/nav-links.php';
                $nav_name = 'Clubs'; include '_inc/nav-links.php';
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