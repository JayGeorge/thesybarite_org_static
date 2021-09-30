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
                            <h3><img src="/img/svg/hot.svg" alt="Flame." /> What’s Hot Now</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/experiences/silverstone/silverstone.jpg" alt="Silverstone" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/england.svg" alt="English Flag" /></span> Formula 1 Luxury Stay At Silverstone</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/experiences/six-senses-ibiza/six-senses-ibiza.jpg" alt="Silverstone" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/spain.svg" alt="Spanish Flag" /></span> Europe’s Hottest New Hotel — Six Senses Ibiza</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="c-mega-menu__category"><a href="">Arts & Culture</a></li>
                                    <li class="c-mega-menu__category"><a href="">Beauty & Wellbeing</a></li>
                                    <li class="c-mega-menu__category"><a href="">Best of Britain</a></li>
                                    <li class="c-mega-menu__category"><a href="">Create Your Own</a></li>
                                    <li class="c-mega-menu__category"><a href="">Fashion & Style</a></li>
                                    <li class="c-mega-menu__category"><a href="">Food & Drink</a></li>
                                    <li class="c-mega-menu__category"><a href="">Lifestyle & Adventure</a></li>
                                    <li class="c-mega-menu__category"><a href="">Parties & Events</a></li>
                                </ul>
                                <ul>
                                    <li class="c-mega-menu__category"><a href="">Private Stays</a></li>
                                    <li class="c-mega-menu__category"><a href="">Property</a></li>
                                    <li class="c-mega-menu__category"><a href="">Sport</a></li>
                                    <li class="c-mega-menu__category"><a href="">Technology</a></li>
                                    <li class="c-mega-menu__category"><a href="">Travel</a></li>
                                    <li class="c-mega-menu__category"><a href="">Virtual</a></li>
                                    <li class="c-mega-menu__category"><a href="">Yachts, Cars & Jets</a></li>
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
                            <h3><img src="/img/svg/sybarite-life.svg" alt="Flame." /> The Sybarite Life</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/magazine/ajarb-bernard-ategwa.jpg" alt="Artist Ajarb Bernard Ategwa" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/cameroon.svg" alt="South Africa Flag" /></span> Interview with Artist Ajarb Bernard Ategwa</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/magazine/magenta-london-restaurant.jpg" alt="London’s New Restaurant, Magenta" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/uk.svg" alt="South Africa Flag" /></span> Review of London’s New Restaurant, Magenta</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="c-mega-menu__category"><a href="">Arts & Culture</a></li>
                                    <li class="c-mega-menu__category"><a href="">Beauty & Wellbeing</a></li>
                                    <li class="c-mega-menu__category"><a href="">Fashion & Style</a></li>
                                    <li class="c-mega-menu__category"><a href="">Food & Drink</a></li>
                                    <li class="c-mega-menu__category"><a href="">Lifestyle & Adventure</a></li>
                                    <li class="c-mega-menu__category"><a href="">Parties & Events</a></li>
                                    <li class="c-mega-menu__category"><a href="">Review</a></li>
                                </ul>
                                <ul>
                                    <li class="c-mega-menu__category"><a href="">Sport</a></li>
                                    <li class="c-mega-menu__category"><a href="">Technology</a></li>
                                    <li class="c-mega-menu__category"><a href="">Travel</a></li>
                                    <li class="c-mega-menu__category"><a href="">Virtual</a></li>
                                    <li class="c-mega-menu__category"><a href="">Yachts, Cars & Jets</a></li>
                                    <li class="c-mega-menu__category"><a href="">Africa</a></li>
                                </ul>
                                <ul class="c-mega-menu__full-width">
                                    <li><a href="">View All Magazine Articles <?php include 'img/svg/arrow-right.php'; ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <?php $nav_name = 'International'; ?>
                <li class="c-site-header__animate-staggered">
                    <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                    <div class="c-mega-menu-container">
                        <div class="c-mega-menu">
                            <button class="c-mega-menu__back-button js__megaMenuBackButton"><?php include 'img/svg/arrow-left.php'; ?> Menu</button>
                            <h3><img src="/img/svg/africa.svg" alt="Passport." /> The Best of Africa</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/international/tswalu-private-reserve.jpg" alt="Tswalu Private Reserve" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/south-africa.svg" alt="South Africa Flag" /></span> Reconnect at Tswalu Private Reserve</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/international/blue-train-south-africa.jpg" alt="Experience South Africa Aboard the Blue Train" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/south-africa.svg" alt="South Africa Flag" /></span> Experience South Africa Aboard the Blue Train</a>
                                    </li>
                                </ul>
                            </div>
                            <h3><img src="/img/svg/passport.svg" alt="Passport." /> Other Adventures</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/international/dar-el-sadaka.jpg" alt="Dar El Sadaka Giraffe room." loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/morocco.svg" alt="Morocco Flag" /></span> Escape to Morocco at Dar El Sadaka</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/international/the-train-on-the-bridge.jpg" alt="The Train on The Bridge South Africa" loading="lazy" width="800" height="448" />
                                        <a href=""><span class="u-icon-left-m"><img src="/img/svg/flags/south-africa.svg" alt="South Africa Flag" /></span> The Train on The Bridge</a>
                                    </li>
                                </ul>
                                <ul class="c-mega-menu__full-width">
                                    <li><a href="">View All African Adventures <span class="u-icon-right-m"><img src="/img/svg/arrow-right.svg" alt="Right arrow." /></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <?php $nav_name = 'Clubs'; ?>
                <li class="c-site-header__animate-staggered">
                    <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                    <div class="c-mega-menu-container">
                        <div class="c-mega-menu">
                            <button class="c-mega-menu__back-button js__megaMenuBackButton"><?php include 'img/svg/arrow-left.php'; ?> Menu</button>
                            <h3><img src="/img/svg/club.svg" alt="Club." /> Exclusive Communities</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/clubs/champagne-club.jpg" alt="Champagne Vineyard" loading="lazy" width="800" height="448" />
                                        <a href="">The Champagne Club</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <img class="c-mega-menu__feature-image" src="/img/clubs/art-club.jpg" alt="Woman looking at art gallery" loading="lazy" width="800" height="448" />
                                        <a href="">The Art Club (Coming Soon)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <?php $nav_name = 'Shop'; ?>
                <li class="c-site-header__animate-staggered">
                    <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                    <div class="c-mega-menu-container">
                        <div class="c-mega-menu">
                            <button class="c-mega-menu__back-button js__megaMenuBackButton"><?php include 'img/svg/arrow-left.php'; ?> Menu</button>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <h2 class="c-mega-menu__title-l">Shop coming soon</h2>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <?php $nav_name = 'Search'; ?>
                <li class="c-site-header__animate-staggered c-site-header__search">
                    <a class="js__megaMenuInitiate c-site-header__search-link" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><span class="u-screen-reader-text--mq-nav-opens-after">Search</span> <svg style="margin-inline-start: 0;" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="m57.926 55.098 10.488 10.488-2.828 2.828-10.488-10.488c-2.524 1.93-5.676 3.074-9.098 3.074-8.285 0-15-6.714-15-15 0-8.285 6.715-15 15-15s15 6.715 15 15c0 3.422-1.144 6.575-3.074 9.098zm-11.926 1.902c6.074 0 11-4.926 11-11s-4.926-11-11-11-11 4.926-11 11 4.926 11 11 11z" fill-rule="nonzero" transform="matrix(2.64992 0 0 2.64992 -82.0129 -82.013)"/></svg></a>
                    <div class="c-mega-menu-container">
                        <div class="c-mega-menu">
                            <button class="c-mega-menu__back-button js__megaMenuBackButton"><?php include 'img/svg/arrow-left.php'; ?> Menu</button>
                            <h3>The Best of Africa</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <form role="search" action="https://experienceluxury.co" method="get">
                                        <div>
                                            <input placeholder="Search..." type="search" name="s" title="Search" value="">
                                        </div>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="c-site-header__animate-staggered">
                    <div class="c-btn">
                        <a href="/champagne-club-logged-in.php">
                            Login
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
</div>