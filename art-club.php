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

<body>
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
            <img src="/img/2.jpg" width="3456" height="2304" alt="Some alt text here" class="image-with-text__image">
            <button class="image-with-text__arrow">
                <?php include 'img/svg/down-arrow.php'; ?>
            </button>
            <div class="image-with-text__cta-box">
                <p>Unlimited access to the most exclusive London art galleries every month of the year.</p>
            </div>
        </header>
        <div class="c-article c-article--compressed-b">
            <div class="o-article-grid">
                <div class="o-article-grid__text">
                    <!-- <h2>Meet Edward, your bespoke wine curator</h2> -->
                    <h2>Undiscovered emerging artists</h2>
                    <p class="c-entry-lead"><em>The Art Club</em> is an ecosystem we created to support artists. Our mission is to pioneer and support a showcase emerging talent in both traditional and NFT Art.</p>
                    <img class="u-decorative-arrow" src="/img/svg/arrow-diagonal-2.svg" alt="Visual Arrow" />
                </div>
                <div class="o-article-grid__image">
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
                <h3 class="c-gallery__hero-title">Moussa <br/>Traoré</h3>
                <div class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/moussa-traore/1.jpg" alt="t" />
                </div>
                <div class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/moussa-traore/2.jpg" alt="t" />
                </div>
                <div class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/moussa-traore/3.jpg" alt="t" />
                </div>
            </div>
        </div>
        <div></div>
    </main>

    <?php include '_inc/footer.php'; ?>
</body>

</html>
