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
        <header class="image-with-text">
            <div class="image-with-text__text">
                <h1><span>the</span>art <br/>club</h1>
            </div>
            <img src="/img/clubs/art-club.jpg" width="3456" height="2304" alt="Some alt text here" class="image-with-text__image">
            <a href="#arrow-target" class="image-with-text__arrow">
                <?php include 'img/svg/down-arrow.php'; ?>
            </a>
            <div class="image-with-text__cta-box">
                <p>Unlimited access to the most exclusive London art galleries every month of the year.</p>
            </div>
        </header>
        <div id="arrow-target" class="c-article c-article--compressed-b">
            <div class="o-article-grid o-article-grid--with-image">
                <div class="o-article-grid__column-1">
                    <h2>Undiscovered emerging artists</h2>
                    <p class="c-entry-lead"><em>The Art Club</em> is an ecosystem we created to support artists. Our mission is to pioneer and support a showcase emerging talent in both traditional and NFT Art.</p>
                    <img class="u-decorative-arrow u-decorative-arrow--diagonal" src="/img/svg/arrow-diagonal-2.svg" alt="Visual Arrow" />
                </div>
                <div class="o-article-grid__column-2">
                    <figure>
                        <img src="/img/clubs/art-club/undiscovered.jpg" alt="Something" />
                        <figcaption>Both physical and digital art—A Phy(gital) Art Club</figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <?php $filename = 'gallery'; include '_inc/_stylesheet.php'; ?>
        <div class="u-panel-white">
            <h2 class="c-eyebrow-heading">Featured</h2>
            <div class="c-gallery">
                <div class="c-gallery__item">
                    <h3 class="c-gallery__hero-title">Ajarb Bernard Ategwa</h3>
                    <p>Ajarb Bernard Ategwa is a self-taught artist. He's inspired by daily life scenes and seeks to transcribe the bustle of Douala and the richness of the Cameroonian culture.</p>
                    <p><a href="" class="c-link-button">Learn more</a></p>
                </div>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/ajarb-ategwa/1.png" alt="t" />
                    <figcaption>Sans Titre</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/ajarb-ategwa/2.png" alt="t" />
                    <figcaption>Mon Combat</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/ajarb-ategwa/4.png" alt="t" />
                    <figcaption>Brousses imaginaires</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/ajarb-ategwa/5.png" alt="t" />
                    <figcaption>Sans tête</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/ajarb-ategwa/3.png" alt="t" />
                    <figcaption>Brousses imaginaires</figcaption>
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
                    <img src="/img/clubs/art-club/gallery/hamid-nortey/build-an-empire-leave-a-legacy.jpg" alt="t" />
                    <figcaption>Kyomu</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/hamid-nortey/deep-summer.jpg" alt="t" />
                    <figcaption>Congressman John Lewis</figcaption>
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
