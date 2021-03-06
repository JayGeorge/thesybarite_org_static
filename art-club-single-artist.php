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
    $header_light_background = 'yes';
    $some_variable_to_pass_into_the_include = 'aaaaaaaaaaaaaaaaaaaa';
    // then you just echo $some_variable_to_pass_into_the_include inside the include
    include '_inc/head.php';
?>

<?php /* for modules, use the below to link to your stylesheet */ ?>
<?php /* <link rel="stylesheet" href="style.css"> */?>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <?php include '_inc/header.php'; ?>

    <?php /* Need tabindex="-1" to lock the tab focus here when using Skip to Content */?>
    <main tabindex="-1" id="main" class="c-main-with-no-header">
        <header class="c-article c-article--compressed-b-2">
            <div class="c-intro-grid c-intro-grid--with-image">
                <div class="c-intro-grid__inner">
                    <div class="c-intro-grid__column-1">
                        <h2>Ajarb Bernard Ategwa</h2>
                        <p class="c-entry-lead"><em>Ategwa</em> uses portrait formats and draws on subjects from a photo stuido in his neighbourhood.<br/>He offers a local perspective on modes of self representation in Cameroon today.</p>
                        <img class="u-decorative-arrow u-decorative-arrow--diagonal" src="/img/svg/arrow-diagonal-2.svg" alt="Visual Arrow" />
                    </div>
                    <div class="c-intro-grid__column-2">
                        <div>
                            <img src="/img/clubs/art-club/gallery/ajarb-ategwa/early-morning-selfie.png" alt="Something" />
                            <div class="o-icon-row">
                                <span class="c-gallery__title">Early morning selfie (2019)</span>
                                <a href="" class="c-price">??10,000</a>
                            </div>
                        </div>
                    </div>
                    <div class="c-intro-grid__column-3">
                        <p>Something about this portrait. glamorous urban scenes bear witness to Africa???s transforming urban landscape and to its burgeoning middle classes, thereby reclaiming ownership over prevailing narratives of poverty and war.</p>
                    </div>
                </div>
            </div>
        </header>
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
        </script>
        <div class="u-panel-white">
            <h2 class="c-eyebrow-heading">December 2021</h2>
            <div class="c-gallery">
                <div class="c-gallery__item">
                    <h3 class="c-gallery__hero-title"><a href="/art-club-single-artist.php">Modern Day Life</a></h3>
                    <p>Some info about this exhibition. Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Early morning selfie" src="/img/clubs/art-club/gallery/ajarb-ategwa/early-morning-selfie.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Early morning selfie (2019)</span>
                        <a href="" class="c-price">??10,000</a>
                    </div>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Am I looking good" src="/img/clubs/art-club/gallery/ajarb-ategwa/am-i-looking-good.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Am I looking good (2019)</span>
                        <a href="" class="c-price">Place Bid</a>
                    </div>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Am almost done" src="/img/clubs/art-club/gallery/ajarb-ategwa/am-almost-done.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Am almost done (2018)</span>
                        <a href="" class="c-price">Place Bid</a>
                    </div>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Yaounde" src="/img/clubs/art-club/gallery/ajarb-ategwa/yaounde.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Yaounde (2021)</span>
                        <a href="" class="c-price">??11,500</a>
                    </div>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Douala" src="/img/clubs/art-club/gallery/ajarb-ategwa/douala.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Douala (2018)</span>
                        <a href="" class="c-price">Place Bid</a>
                    </div>
                </div>
            </div>
            <h2 class="c-eyebrow-heading">Summer 2021</h2>
            <div class="c-gallery">
                <div class="c-gallery__item">
                    <h3 class="c-gallery__hero-title"><a href="/art-club-single-artist.php">Some Other Exhibition</a></h3>
                    <p>Some info about this exhibition. Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Early morning selfie" src="/img/clubs/art-club/gallery/ajarb-ategwa/early-morning-selfie.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Early morning selfie (2019)</span>
                        <a href="" class="c-price">??10,000</a>
                    </div>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Am I looking good" src="/img/clubs/art-club/gallery/ajarb-ategwa/am-i-looking-good.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Am I looking good (2019)</span>
                        <a href="" class="c-price">??3,200</a>
                    </div>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Am almost done" src="/img/clubs/art-club/gallery/ajarb-ategwa/am-almost-done.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Am almost done (2018)</span>
                        <a href="" class="c-price">??4,600</a>
                    </div>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Yaounde" src="/img/clubs/art-club/gallery/ajarb-ategwa/yaounde.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Yaounde (2021)</span>
                        <a href="" class="c-price">??11,500</a>
                    </div>
                </div>
                <div class="c-gallery__item">
                    <img id="gallery-1" data-fancybox="gallery" data-caption="Douala" src="/img/clubs/art-club/gallery/ajarb-ategwa/douala.png" alt="t" />
                    <div class="o-icon-row">
                        <span class="c-gallery__title">Douala (2018)</span>
                        <a href="" class="c-price">??11,000</a>
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
                                            <input type="text" name="log" id="name" placeholder="Name">
                                        </div>
                                        <div class="c-form-cols__col">
                                            <label for="user" class="elementor-field-label">Email Address</label>
                                            <input type="text" name="log" id="user" placeholder="Email Address">
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
