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
                <div class="c-mega-menu-container">
                    <div class="c-mega-menu">
                        <h2 class="c-mega-menu__full-width">Handcrafted, Luxury Experiences</h2>
                        <h3><?php include 'img/svg/hot.php'; ?> What’s Hot Now</h3>
                        <div class="c-mega-menu__grid">
                            <ul class="c-mega-menu__full-width">
                                <li>
                                    <img src="/img/experiences/silverstone/silverstone.jpg" alt="Silverstone" />
                                    <strong><a href="">Formula 1 Luxury Stay At Silverstone</a></strong>
                                </li>
                                <li>
                                    <img src="/img/experiences/six-senses-ibiza/six-senses-ibiza.jpg" alt="Silverstone" />
                                    <strong><a href="">Europe’s Hottest New Hotel — Six Senses Ibiza</a></strong>
                                </li>
                            </ul>
                            <ul>
                                <li><a href="">Arts & Culture</a></li>
                                <li><a href="">Beauty & Wellbeing</a></li>
                                <li><a href="">Best of Britain</a></li>
                                <li><a href="">Create Your Own</a></li>
                                <li><a href="">Fashion & Style</a></li>
                                <li><a href="">Food & Drink</a></li>
                                <li><a href="">Lifestyle & Adventure</a></li>
                                <li><a href="">Parties & Events</a></li>
                            </ul>
                            <ul>
                                <li><a href="">Private Stays</a></li>
                                <li><a href="">Property</a></li>
                                <li><a href="">Sport</a></li>
                                <li><a href="">Technology</a></li>
                                <li><a href="">Travel</a></li>
                                <li><a href="">Virtual</a></li>
                                <li><a href="">Yachts, Cars & Jets</a></li>
                            </ul>
                            <ul class="c-mega-menu__full-width">
                                <li><a href="">View All Experiences <?php include 'img/svg/arrow-right.php'; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <?php $nav_name = 'Magazine'; ?>
            <li<?php if ($current_nav === $nav_name) { echo ' class="current-menu-item"'; } ?>>
                <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                <div class="c-mega-menu-container">
                    <div class="c-mega-menu">
                        <ul>
                            <li><a href="">Arts & Culture</a></li>
                            <li><a href="">Beauty & Wellbeing</a></li>
                            <li><a href="">Fashion & Style</a></li>
                            <li><a href="">Food & Drink</a></li>
                            <li><a href="">Lifestyle & Adventure</a></li>
                            <li><a href="">Parties & Events</a></li>
                            <li><a href="">Review</a></li>
                            <li><a href="">Sport</a></li>
                            <li><a href="">Technology</a></li>
                            <li><a href="">Travel</a></li>
                            <li><a href="">Virtual</a></li>
                            <li><a href="">Yachts, Cars & Jets</a></li>
                            <li><a href="">Africa</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <?php
                $nav_name = 'International'; include '_inc/nav-links.php';
                // $nav_name = 'Africa'; include '_inc/nav-links.php';
                $nav_name = 'Clubs'; include '_inc/nav-links.php';
                $nav_name = 'Shop'; include '_inc/nav-links.php';
            ?>
            <li><?php include 'img/svg/search.php'; ?></li>

            <li>
                <div class="btn">
                    <a href="/champagne-club-logged-in.php">
                        Login
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</header>
</div>