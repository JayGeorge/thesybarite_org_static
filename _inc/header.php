<a href="#main" class="skip-to-content u-screen-reader-text" title="Skip to content">
    Skip to content
</a>

<a href="#footer" class="skip-to-content u-screen-reader-text" title="Skip to footer navigation">
    Skip to footer navigation
</a>

<div class="c-site-header-wrapper c-site-header-wrapper--static-only">
    <header class="c-site-header<?php if (isset($header_light_background)) { echo ' c-site-header--light-background'; } ?>">
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
                            <h3>What’s hot now</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/experiences/james-bond-matera/james-bond-matera.jpg" alt="Matera Italy" loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/italy.svg" alt="Italian Flag" /> Experience James Bond in Matera</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/experiences/six-senses-ibiza/six-senses-ibiza.jpg" alt="Six Senses in Ibiza" loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/spain.svg" alt="Spanish Flag" /> Europe’s Hottest New Hotel — Six Senses Ibiza</a>
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
                                    <li><a href="">View All Experiences <span class="u-icon-right-m"><img src="/img/svg/arrow-right.svg" alt="Right arrow." /></span></a></li>
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
                            <h3>The Sybarite life</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/magazine/vesper-martini.jpg" alt="Sipsmith Gin Vesper Martini" loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/uk.svg" alt="UK Flag" /> Make your own 007 Vesper Martini</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/magazine/suite.jpg" alt="Suite" loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/uk.svg" alt="UK Flag" /> Your favourite James Bond spots</a>
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
                                    <li><a href="">View All Magazine Articles <span class="u-icon-right-m"><img src="/img/svg/arrow-right.svg" alt="Right arrow." /></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <?php $nav_name = 'Africa'; ?>
                <li class="c-site-header__animate-staggered">
                    <a class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                    <div class="c-mega-menu-container">
                        <div class="c-mega-menu">
                            <button class="c-mega-menu__back-button js__megaMenuBackButton"><?php include 'img/svg/arrow-left.php'; ?> Menu</button>
                            <h3>The best of Africa</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/international/tswalu-private-reserve.jpg" alt="Tswalu Private Reserve" loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/south-africa.svg" alt="South Africa Flag" /> Reconnect at Tswalu Private Reserve</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/international/blue-train-south-africa.jpg" alt="Experience South Africa Aboard the Blue Train" loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/south-africa.svg" alt="South Africa Flag" /> Experience South Africa Aboard the Blue Train</a>
                                    </li>
                                </ul>
                            </div>
                            <h3>Other adventures</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/international/dar-el-sadaka.jpg" alt="Dar El Sadaka Giraffe room." loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/morocco.svg" alt="Morocco Flag" /> Escape to Morocco at Dar El Sadaka</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/international/the-train-on-the-bridge.jpg" alt="The Train on The Bridge South Africa" loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/south-africa.svg" alt="South Africa Flag" /> The Train on The Bridge</a>
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
                            <h3>Exclusive communities</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/clubs/champagne-club-mega-menu.jpg" alt="Champagne Vineyard" loading="lazy" width="800" height="448" /></a>
                                        <a href="">The Champagne Club</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <a href="/art-club.php"><img class="c-mega-menu__feature-image" src="/img/clubs/art-club-mega-menu.jpg" alt="Woman looking at art gallery" loading="lazy" width="800" height="448" /></a>
                                        <a href="/art-club.php">The Art Club</a>
                                    </li>
                                </ul>
                            </div>
                            <h3>Art Club features</h3>
                            <div class="c-mega-menu__grid">
                                <ul class="c-mega-menu__full-width">
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/clubs/featured-artist.jpg" alt="Champagne Vineyard" loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/cameroon.svg" alt="Cameroon Flag" /> Featured Artist — Ajarb Bernard Ategwa</a>
                                    </li>
                                    <li class="c-mega-menu__title">
                                        <a href=""><img class="c-mega-menu__feature-image" src="/img/clubs/featured-exhibition.jpg" alt="" loading="lazy" width="800" height="448" /></a>
                                        <a href="" class="o-icon-with-title"><img src="/img/svg/flags/ghana.svg" alt="Ghanaian Flag" /> Featured Exhibition — Ajarb Bernard Ategwa</a>
                                    </li>
                                </ul>
                                <ul class="c-mega-menu__full-width">
                                    <li><a href="">View Art Club <span class="u-icon-right-m"><img src="/img/svg/arrow-right.svg" alt="Right arrow." /></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <?php $nav_name = 'Concierge'; ?>
                <li class="c-site-header__animate-staggered">
                    <a id="test" data-js="menu-concierge" class="js__megaMenuInitiate" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><?php echo $nav_name; ?></a>
                    <div class="c-mega-menu-container">
                        <div class="c-mega-menu">
                            <button class="c-mega-menu__back-button js__megaMenuBackButton"><?php include 'img/svg/arrow-left.php'; ?> Menu</button>
                            <div class="c-mega-menu-concierge">
                                <div class="c-mega-menu-concierge__form">
                                    <div class="s-forms-main-theme">
                                        <form class="c-form" id="pp-form-456b1b1" method="post" action="https://experienceluxury.co/register/?wpe-login=true">
                                            <input type="hidden" id="ppe-lf-login-nonce" name="ppe-lf-login-nonce" value="472c193598">
                                            <input type="hidden" name="_wp_http_referer" value="/login/">
                                            <input type="hidden" name="redirect_to" value="/login/">
                                            <div class="c-form-cols">
                                                <div class="c-form-cols__col c-form-cols__col--full-width">
                                                    <label for="name" class="elementor-field-label">Full Name</label>
                                                    <input type="text" name="log" id="name">
                                                </div>
                                                <div class="c-form-cols__col">
                                                    <label for="user" class="elementor-field-label">Email Address</label>
                                                    <input type="text" name="log" id="user">
                                                </div>
                                                <div class="c-form-cols__col">
                                                    <label for="user" class="elementor-field-label">Phone Number</label>
                                                    <input type="text" name="log" id="user">
                                                </div>
                                                <div class="c-form-cols__col c-form-cols__col--full-width">
                                                    <label for="message" class="elementor-field-label">Concierge Request</label>
                                                    <textarea id="message"></textarea>
                                                </div>
                                                <div class="c-form-cols__col c-form-cols__col--full-width">
                                                    <button type="submit" name="wp-submit" class="c-btn c-btn--1">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="c-mega-menu-concierge__info">
                                    <div class="c-mega-menu-concierge-services">
                                        <div class="c-mega-menu-concierge-services__avatar">
                                            <img src="/img/concierge/avatar.jpg" alt="Concierge Avatar" />
                                        </div>
                                        <div class="c-mega-menu-concierge-services__text">
                                            <h2>Concierge</h2>
                                            <p>Our concierge service is a real life, on-call genie that can fulfil all urgent requests. <a href="">Learn more about our Concierge service</a>.</p>
                                        </div>
                                        <ul class="c-mega-menu-concierge-icons">
                                            <li class="c-mega-menu-concierge-icons__icon">
                                                24 hour manager
                                            </li>
                                            <li class="c-mega-menu-concierge-icons__icon">
                                                Tickets and reservations
                                            </li>
                                            <li class="c-mega-menu-concierge-icons__icon">
                                                Advisors and Specialists
                                            </li>
                                            <li class="c-mega-menu-concierge-icons__icon">
                                                Security
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                    <a class="js__searchInitiate c-site-header__search-link" href="/<?php echo strtolower(str_replace(' ', '-', $nav_name));?>.php"><span class="u-screen-reader-text--mq-nav-opens-after">Search</span> <svg style="margin-inline-start: 0;" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="m57.926 55.098 10.488 10.488-2.828 2.828-10.488-10.488c-2.524 1.93-5.676 3.074-9.098 3.074-8.285 0-15-6.714-15-15 0-8.285 6.715-15 15-15s15 6.715 15 15c0 3.422-1.144 6.575-3.074 9.098zm-11.926 1.902c6.074 0 11-4.926 11-11s-4.926-11-11-11-11 4.926-11 11 4.926 11 11 11z" fill-rule="nonzero" transform="matrix(2.64992 0 0 2.64992 -82.0129 -82.013)"/></svg></a>
                    <div class="c-mega-menu-container c-mega-menu-container--search">
                        <div class="c-mega-menu-full-search">
                            <button class="js__closeSearchModal c-close-button">
                                <svg aria-labelledby="title-modal-cancel" role="img" class="c-modal-close" width="100pt" height="100pt" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <g fill-rule="nonzero"><path d="m1.832 46.562h96.312v6.875h-96.312z" transform="matrix(.707107 .707107 -1.332 1.332 81.2407 -51.9469)"/><path d="m1.832 46.562h96.312v6.875h-96.312z" transform="matrix(.707107 -.707107 1.332 1.332 -51.9584 18.7468)"/></g>
                                </svg>
                            </button>
                            <form role="search" action="https://experienceluxury.co" method="get">
                                <input placeholder="Search..." type="search" name="s" title="Search" value="">
                            </form>
                        </div>
                    </div>
                </li>

                <li class="c-site-header__animate-staggered c-site-header__dropdown-menu">
                    <!-- <button id="js__staticOnlyLoginText" class="js__showModal c-btn"> -->
                    <button id="js__loggedOut" class="js__showModal c-btn">
                        Login
                    </button>
                    <button id="js__loggedIn" class="js__openDropdown c-btn">
                        John Cofie
                    </button>
                    <ul class="c-site-header__dropdown-menu__menu">
                        <li><a href="" class="js__staticOnlyFakeLoggedOutState">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
</div>