<!doctype html>
<html class="no-js" lang="en">

<?php 
    // "Include from root" so that we can use includes subfolders
    // Based on https://css-tricks.com/php-include-from-root, first comment
    set_include_path(implode( PATH_SEPARATOR, array(
        $_SERVER['DOCUMENT_ROOT'],
        get_include_path()
    )));
?>
<?php
    $page_title = "Art Club";
    $current_nav = 'home';
    $some_variable_to_pass_into_the_include = 'aaaaaaaaaaaaaaaaaaaa';
    // then you just echo $some_variable_to_pass_into_the_include inside the include
    include '_inc/head.php';
?>

<?php /* for modules, use the below to link to your stylesheet */ ?>
<?php /* <link rel="stylesheet" href="style.css"> */?>

<body class="s-dark-cover-image">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <?php include '_inc/header.php'; ?>

    <?php /* Need tabindex="-1" to lock the tab focus here when using Skip to Content */?>
    <main tabindex="-1" id="main">
        <header class="image-with-text image-with-text--art-club">
            <div class="image-with-text__text">
                <h1 class="u-ligatures"><span>the</span>art <br/>club</h1>
            </div>
            <img src="/img/clubs/art-club.jpg" width="3456" height="2304" alt="Some alt text here" class="image-with-text__image">
            <a href="#arrow-target" class="image-with-text__arrow">
                <?php include 'img/svg/down-arrow.php'; ?>
            </a>
            <div class="c-cta-box">
                <p>Unlimited access to the most exclusive London art galleries every month of the year.</p>
            </div>
        </header>
        <div class="u-panel-white">
            <div id="arrow-target" class="c-article c-article--compressed-b-1">
                <div class="o-intro-grid o-intro-grid--with-image">
                    <div class="o-intro-grid__inner">
                        <div class="o-intro-grid__column-1">
                            <h2>Undiscovered emerging artists</h2>
                            <p class="c-entry-lead"><em>The Art Club</em> is an ecosystem we created to support artists. Our mission is to pioneer and support a showcase emerging talent in both traditional and NFT Art.</p>
                            <img class="u-decorative-arrow u-decorative-arrow--diagonal" src="/img/svg/arrow-diagonal-2.svg" alt="Visual Arrow" />
                        </div>
                        <div class="o-intro-grid__column-2">
                            <div>
                                <figure>
                                    <img src="/img/clubs/art-club/undiscovered.jpg" alt="Something" />
                                    <figcaption>Both physical and digital art—A Phy(gital) Art Club</figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="o-intro-grid__column-3">
                            <p>Something about this portrait. glamorous urban scenes bear witness to Africa’s transforming urban landscape and to its burgeoning middle classes, thereby reclaiming ownership over prevailing narratives of poverty and war.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php $filename = 'gallery'; include '_inc/_stylesheet.php'; ?>
            <?php $filename = 'plugins/fancybox'; include '_inc/_stylesheet.php'; ?>
            <?php $filename = 'plugins/fancybox-custom'; include '_inc/_stylesheet.php'; ?>
            <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
            <script>
                Fancybox.bind('#gallery-1', {
                    dragToClose: false,
                    Image: {
                        zoom: true,
                    },
                    Toolbar: {
                        display: [{ id: "counter", position: "center" }, { id: "close", html: '<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" tabindex="-1"><g fill-rule="nonzero"><path fill="#fff" d="m1.832 46.562h96.312v6.875h-96.312z" transform="matrix(.707107 .707107 -1.332 1.332 81.2407 -51.9469)"/><path fill="#fff" d="m1.832 46.562h96.312v6.875h-96.312z" transform="matrix(.707107 -.707107 1.332 1.332 -51.9584 18.7468)"/></g></svg>' }],
                    },
                });
                Fancybox.bind('#gallery-2', {
                    dragToClose: false,
                    Image: {
                        zoom: true,
                    },
                    Toolbar: {
                        display: [{ id: "counter", position: "center" }, { id: "close", html: '<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" tabindex="-1"><g fill-rule="nonzero"><path fill="#fff" d="m1.832 46.562h96.312v6.875h-96.312z" transform="matrix(.707107 .707107 -1.332 1.332 81.2407 -51.9469)"/><path fill="#fff" d="m1.832 46.562h96.312v6.875h-96.312z" transform="matrix(.707107 -.707107 1.332 1.332 -51.9584 18.7468)"/></g></svg>' }],
                    },
                });
            </script>
            <h2 class="c-eyebrow-heading">Featured Artist</h2>
            <div class="c-gallery">
                <div class="c-gallery__item">
                    <h3 class="c-gallery__hero-title"><a href="/art-club-single-artist.php">Ajarb Bernard Ategwa</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <p><a href="/art-club-single-artist.php" class="c-link-button"><span>Learn more</span> <?php include 'img/svg/arrow-right.php'; ?></a></p>
                </div>
                <figure class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Early morning selfie" src="/img/clubs/art-club/gallery/ajarb-ategwa/early-morning-selfie.png" alt="t" />
                    <figcaption>Early morning selfie</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Am I looking good" src="/img/clubs/art-club/gallery/ajarb-ategwa/am-i-looking-good.png" alt="t" />
                    <figcaption>Am I looking good</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Am almost done" src="/img/clubs/art-club/gallery/ajarb-ategwa/am-almost-done.png" alt="t" />
                    <figcaption>Am almost done</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Yaounde" src="/img/clubs/art-club/gallery/ajarb-ategwa/yaounde.png" alt="t" />
                    <figcaption>Yaounde</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Douala" src="/img/clubs/art-club/gallery/ajarb-ategwa/douala.png" alt="t" />
                    <figcaption>Douala</figcaption>
                </figure>
            </div>
            <h2 class="c-eyebrow-heading">Featured Exhibition</h2>
            <div class="c-gallery">
                <div class="c-gallery__item">
                    <h3 class="c-gallery__hero-title"><a href="/art-club-single-exhibition.php">Hamid Nortey / Modern<br/>Life</a></h3>
                    <p>Hamid Nii Nortey’s new series of glamorous urban scenes bear witness to Africa’s transforming urban landscape and to its burgeoning middle classes, thereby reclaiming ownership over prevailing narratives of poverty and war.</p>
                    <p>An emerging artist based in Accra, Hamid Nii Nortey has stood witness to the city’s considerable transformation in recent decades – one that has materialized in its expansion and architectural development and in the social dynamics that have emanated from it.</p>
                    <p><a href="/art-club-single-exhibition.php" class="c-link-button"><span>Learn more</span> <?php include 'img/svg/arrow-right.php'; ?></a></p>
                </div>
                <figure class="c-gallery__item">
                    <img id="gallery-2" data-fancybox="gallery" data-caption="Build an empire, leave a legacy" src="/img/clubs/art-club/gallery/hamid-nortey/build-an-empire-leave-a-legacy.jpg" alt="t" />
                    <figcaption>Build an empire, leave a legacy</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img id="gallery-2" data-fancybox="gallery" data-caption="Deep Summer is when laziness finds respectability" src="/img/clubs/art-club/gallery/hamid-nortey/deep-summer.jpg" alt="t" />
                    <figcaption>Deep Summer is when laziness finds respectability</figcaption>
                </figure>
            </div>
            <h2 class="c-eyebrow-heading">Browse By Artist</h2>
            <?php /* This would pull in the latest works from the artist */ ?>
            <div class="c-gallery-groups">
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-artist.php">Phillip Humm</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery c-gallery-groups__gallery--landscape">
                        <a href="/art-club-single-artist.php">
                            <img src="/img/clubs/art-club/gallery/phillip-humm/1.jpg" alt="t" />
                        </a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-artist.php">Hamid Nortey</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-artist.php"><img src="/img/clubs/art-club/gallery/hamid-nortey/build-an-empire-leave-a-legacy.jpg" alt="t" /></a>
                        <a href="/art-club-single-artist.php"><img src="/img/clubs/art-club/gallery/hamid-nortey/deep-summer.jpg" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-artist.php">Ajarb Ategwa</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-artist.php"><img src="/img/clubs/art-club/gallery/ajarb-ategwa/am-almost-done.png" alt="t" /></a>
                        <a href="/art-club-single-artist.php"><img src="/img/clubs/art-club/gallery/ajarb-ategwa/am-i-looking-good.png" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-artist.php">Moussa Traore</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-artist.php"><img src="/img/clubs/art-club/gallery/moussa-traore/1.jpg" alt="t" /></a>
                        <a href="/art-club-single-artist.php"><img src="/img/clubs/art-club/gallery/moussa-traore/2.jpg" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-artist.php">Sungi Mlengeya</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-artist.php"><img src="/img/clubs/art-club/gallery/sungi-mlengeya/1.jpg" alt="t" /></a>
                        <a href="/art-club-single-artist.php"><img src="/img/clubs/art-club/gallery/sungi-mlengeya/2.jpg" alt="t" /></a>
                    </div>
                </div>
            </div>
            <h2 class="c-eyebrow-heading">Browse By Exhibition</h2>
            <div class="c-gallery-groups">
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-exhibition.php">Hamid Nortey / Modern Life</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-exhibition.php"><img src="/img/clubs/art-club/gallery/hamid-nortey/build-an-empire-leave-a-legacy.jpg" alt="t" /></a>
                        <a href="/art-club-single-exhibition.php"><img src="/img/clubs/art-club/gallery/hamid-nortey/deep-summer.jpg" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-exhibition.php">Tate Modern / Dialectic</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery c-gallery-groups__gallery--landscape">
                        <a href="/art-club-single-exhibition.php"><img src="/img/clubs/art-club/gallery/phillip-humm/1.jpg" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-exhibition.php">Ajarb Ategwa / Everyday Life</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-exhibition.php"><img src="/img/clubs/art-club/gallery/ajarb-ategwa/early-morning-selfie.png" alt="t" /></a>
                        <a href="/art-club-single-exhibition.php"><img src="/img/clubs/art-club/gallery/ajarb-ategwa/douala.png" alt="t" /></a>
                    </div>
                </div>
            </div>
            <h2 class="c-eyebrow-heading">Browse By Theme</h2>
            <?php /* This would pull in the latest works from the artist */ ?>
            <div class="c-gallery-groups c-gallery-groups--compressed">
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-theme.php">African Art</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/sungi-mlengeya/1.jpg" alt="t" /></a>
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/hamid-nortey/build-an-empire-leave-a-legacy.jpg" alt="t" /></a>
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/ajarb-ategwa/am-almost-done.png" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-theme.php">Apocolypse</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/1.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/2.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/dialectic.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/dialectic.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/1.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/2.jpg" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-theme.php">Abstraction</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/moussa-traore/4.jpg" alt="t" /></a>
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/moussa-traore/5.jpg" alt="t" /></a>
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/moussa-traore/1.jpg" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-theme.php">Abstraction</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/moussa-traore/4.jpg" alt="t" /></a>
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/moussa-traore/5.jpg" alt="t" /></a>
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/moussa-traore/1.jpg" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-theme.php">African Art</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/sungi-mlengeya/1.jpg" alt="t" /></a>
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/hamid-nortey/build-an-empire-leave-a-legacy.jpg" alt="t" /></a>
                        <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/ajarb-ategwa/am-almost-done.png" alt="t" /></a>
                    </div>
                </div>
                <div class="c-gallery-groups__item">
                    <h3 class="c-gallery-groups__hero-title"><a href="/art-club-single-theme.php">Apocolypse</a></h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <div class="c-gallery-groups__gallery">
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/1.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/2.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/dialectic.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/dialectic.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/1.jpg" alt="t" /></a>
                    <a href="/art-club-single-theme.php"><img src="/img/clubs/art-club/gallery/phillip-humm/2.jpg" alt="t" /></a>
                    </div>
                </div>
            </div>
            <div class="u-width-max-1">
                <div class="c-article c-article--compressed-b-1">
                    <div class="o-article-grid o-article-grid--with-form">
                        <div class="o-article-grid__column-1">
                            <h2>Book an Appointment with an Artist or Advisor</h2>
                            <p class="c-entry-lead"><em>Contact us</em> and view art in person. Meet the artist as well as art experts. Ask them about their work along with the opportunity to buy one of their exclusive pieces of art.</p>
                            <img class="u-decorative-arrow u-decorative-arrow--right" src="/img/svg/arrow-diagonal-2.svg" alt="Visual Arrow" />
                        </div>
                        <div class="o-article-grid__column-2">
                            <div class="s-forms-main-theme">
                                <form class="c-form" id="pp-form-456b1b1" method="post" action="https://experienceluxury.co/register/?wpe-login=true">
                                    <input type="hidden" id="ppe-lf-login-nonce" name="ppe-lf-login-nonce" value="472c193598">
                                    <input type="hidden" name="_wp_http_referer" value="/login/">
                                    <input type="hidden" name="redirect_to" value="/login/">
                                    <div class="c-form-cols">
                                        <div class="c-form-cols__col">
                                            <label for="name" class="elementor-field-label">Name</label>
                                            <input type="text" name="log" id="name">
                                        </div>
                                        <div class="c-form-cols__col">
                                            <label for="user" class="elementor-field-label">Email Address</label>
                                            <input type="text" name="log" id="user">
                                        </div>
                                        <div class="c-form-cols__col c-form-cols__col--full-width">
                                            <label for="message" class="elementor-field-label">Message</label>
                                            <textarea id="message"></textarea>
                                        </div>
                                        <div class="c-form-cols__col c-form-cols__col--full-width">
                                            <button type="submit" name="wp-submit" class="c-btn c-btn--1">
                                                Submit
                                            </button>
                                        </div>
                                        <div class="c-form__notes c-form-cols__col c-form-cols__col--full-width">
                                            <p>We'll get back to you in 24 hours</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
    </main>

    <?php include '_inc/footer.php'; ?>
</body>

</html>
