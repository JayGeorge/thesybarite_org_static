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

        <button class="c-nav-mobile-button js__nav-mobile-button u-js-only">
            <?php include 'img/svg/nav.php'; ?>
        </button>

        <nav aria-label="Main navigation" class="c-site-header__nav js__collapsedUntilNavOpened">
            <ul>
                <?php /* 
                    Here you can add the class current-menu-item by the calling the header with a variable like this:
                    $current_nav = 'catalogue';
                    include '_inc/header.php';
                */ ?>
                <?php $nav_name = 'Experiences'; ?>
                <li class="c-site-header__animate-staggered<?php if ($current_nav === $nav_name) { echo ' current-menu-item'; } ?>">
                    <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                    <div class="c-mega-menu-container">
                        <div class="c-mega-menu">
                            <button class="c-mega-menu__back-button js__megaMenuBackButton"><?php include 'img/svg/arrow-left.php'; ?> Menu</button>
                            <h3><?php include 'img/svg/hot.php'; ?> What’s Hot Now</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li>
                                        <img class="c-mega-menu__feature-image" src="/img/experiences/silverstone/silverstone.jpg" alt="Silverstone" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/england.svg" alt="South Africa Flag" /></span> Formula 1 Luxury Stay At Silverstone</a>
                                    </li>
                                    <li>
                                        <img class="c-mega-menu__feature-image" src="/img/experiences/six-senses-ibiza/six-senses-ibiza.jpg" alt="Silverstone" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/spain.svg" alt="South Africa Flag" /></span> Europe’s Hottest New Hotel — Six Senses Ibiza</a>
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
                <li class="c-site-header__animate-staggered<?php if ($current_nav === $nav_name) { echo ' current-menu-item'; } ?>">
                    <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                    <div class="c-mega-menu-container">
                        <div class="c-mega-menu">
                            <button class="c-mega-menu__back-button js__megaMenuBackButton"><?php include 'img/svg/arrow-left.php'; ?> Menu</button>
                            <h3><?php include 'img/svg/sybarite-life.php'; ?> The Sybarite Life</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li>
                                        <img class="c-mega-menu__feature-image" src="/img/magazine/ajarb-bernard-ategwa.jpg" alt="Artist Ajarb Bernard Ategwa" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/cameroon.svg" alt="South Africa Flag" /></span> Interview with Artist Ajarb Bernard Ategwa</a>
                                    </li>
                                    <li>
                                        <img class="c-mega-menu__feature-image" src="/img/magazine/magenta-london-restaurant.jpg" alt="London’s New Restaurant, Magenta" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/uk.svg" alt="South Africa Flag" /></span> Review of London’s New Restaurant, Magenta</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li><a href="">Arts & Culture</a></li>
                                    <li><a href="">Beauty & Wellbeing</a></li>
                                    <li><a href="">Fashion & Style</a></li>
                                    <li><a href="">Food & Drink</a></li>
                                    <li><a href="">Lifestyle & Adventure</a></li>
                                    <li><a href="">Parties & Events</a></li>
                                    <li><a href="">Review</a></li>
                                </ul>
                                <ul>
                                    <li><a href="">Sport</a></li>
                                    <li><a href="">Technology</a></li>
                                    <li><a href="">Travel</a></li>
                                    <li><a href="">Virtual</a></li>
                                    <li><a href="">Yachts, Cars & Jets</a></li>
                                    <li><a href="">Africa</a></li>
                                </ul>
                                <ul class="c-mega-menu__full-width">
                                    <li><a href="">View All Magazine Articles <?php include 'img/svg/arrow-right.php'; ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <?php $nav_name = 'International'; ?>
                <li class="c-site-header__animate-staggered<?php if ($current_nav === $nav_name) { echo ' current-menu-item'; } ?>">
                    <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                    <div class="c-mega-menu-container">
                        <div class="c-mega-menu">
                            <button class="c-mega-menu__back-button js__megaMenuBackButton"><?php include 'img/svg/arrow-left.php'; ?> Menu</button>
                            <h3>The Best of Africa</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li>
                                        <img class="c-mega-menu__feature-image" src="/img/international/tswalu-private-reserve.jpg" alt="Tswalu Private Reserve" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/south-africa.svg" alt="South Africa Flag" /></span> Reconnect at Tswalu Private Reserve</a>
                                    </li>
                                    <li>
                                        <img class="c-mega-menu__feature-image" src="/img/international/blue-train-south-africa.jpg" alt="Experience South Africa Aboard the Blue Train" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/south-africa.svg" alt="South Africa Flag" /></span> Experience South Africa Aboard the Blue Train</a>
                                    </li>
                                </ul>
                                <ul class="c-mega-menu__full-width">
                                    <li><a href="">View All African Adventures <?php include 'img/svg/arrow-right.php'; ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <?php
                    // $nav_name = 'Africa'; include '_inc/nav-links.php';
                    $nav_name = 'Clubs'; include '_inc/nav-links.php';
                    $nav_name = 'Shop'; include '_inc/nav-links.php';
                ?>
                <li class="c-site-header__animate-staggered c-site-header__search"><span>Search</span> <?php include 'img/svg/search.php'; ?></li>
                <li class="c-site-header__animate-staggered">
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