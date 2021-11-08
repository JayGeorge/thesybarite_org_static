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
        <header class="c-article c-article--compressed-b">
            <div class="o-intro-grid o-intro-grid--with-image">
                <div class="o-intro-grid__inner">
                    <div class="o-intro-grid__column-1">
                        <h2>Undiscovered artists gallery</h2>
                        <p class="c-entry-lead"><em>The Art Club</em> is an ecosystem we created to support artists. Our mission is to pioneer and support a showcase emerging talent in both traditional and NFT Art.</p>
                        <img class="u-decorative-arrow u-decorative-arrow--diagonal" src="/img/svg/arrow-diagonal-2.svg" alt="Visual Arrow" />
                    </div>
                    <div class="o-intro-grid__column-2">
                        <figure class="c-image-with-price c-image-with-price--right">
                            <img src="/img/clubs/art-club/gallery/hamid-nortey/build-an-empire-leave-a-legacy.jpg" alt="Something" />
                            <figcaption>Build an empire, leave a legacy by Hamid Nortey</figcaption>
                        </figure>
                        <div class="c-image-with-price__price">£30,000</div>
                    </div>
                    <div class="o-intro-grid__column-3">
                        <p>Hamid Nii Nortey’s new series of glamorous urban scenes bear witness to Africa’s transforming urban landscape and to its burgeoning middle classes, thereby reclaiming ownership over prevailing narratives of poverty and war.</p>
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
        <div class="u-panel-white">
            <h2 class="c-eyebrow-heading">Featured</h2>
            <div class="c-gallery">
                <div class="c-gallery__item">
                    <h3 class="c-gallery__hero-title">Ajarb Bernard Ategwa</h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <p><a href="" class="c-link-button">Learn more</a></p>
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
            <h2 class="c-eyebrow-heading">Modern Life</h2>
            <div class="c-gallery">
                <div class="c-gallery__item">
                    <h3 class="c-gallery__hero-title">Hamid Nortey</h3>
                    <p>Hamid Nii Nortey’s new series of glamorous urban scenes bear witness to Africa’s transforming urban landscape and to its burgeoning middle classes, thereby reclaiming ownership over prevailing narratives of poverty and war.</p>
                    <p>An emerging artist based in Accra, Hamid Nii Nortey has stood witness to the city’s considerable transformation in recent decades – one that has materialized in its expansion and architectural development and in the social dynamics that have emanated from it.</p>
                    <p><a href="">Learn more</a></p>
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
            <div class="u-width-max-1">
                <div class="c-article c-article--compressed-b">
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
