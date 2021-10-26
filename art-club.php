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
                <div class="c-gallery__item">
                    <h3 class="c-gallery__hero-title">Moussa Traoré</h3>
                    <p>Moussa Traoré’s bold paintings feature otherworldly figures that appear to possess both human and alien characteristics. Set on canvas doused in rich color or inky black, his striking protagonists are carefully portrayed in neutral colors and camouflage-like patterns, with a level of detail that captivates the viewer and calls for close looking.</p>
                    <p>Traoré was recently featured in a three-person exhibition at <a href="">Galerie Atiss Dakar in Senegal</a>, as well as the gallery’s virtual presentation for 1-54 Contemporary African Art Fair New York 2020.</p>
                    <p><a href="" class="c-link-button">Learn more</a></p>
                </div>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/moussa-traore/1.jpg" alt="t" />
                    <figcaption>Sans Titre</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/moussa-traore/2.jpg" alt="t" />
                    <figcaption>Mon Combat</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/moussa-traore/4.jpg" alt="t" />
                    <figcaption>Brousses imaginaires</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/moussa-traore/5.jpg" alt="t" />
                    <figcaption>Sans tête</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/moussa-traore/3.jpg" alt="t" />
                    <figcaption>Brousses imaginaires</figcaption>
                </figure>
            </div>
            <div class="c-gallery">
                <div class="c-gallery__item">
                    <h3 class="c-gallery__hero-title">Sungi Mlengeya</h3>
                    <p>Sungi Mlengeya’s spare, monochromatic acrylic portraits depict Black subjects, mostly women, dressed in white clothing and positioned against white backgrounds. The self-taught artist’s detailed renderings and unusual use of negative space cohere into beguiling portraits of Blackness and womanhood.</p>
                    <p>studied finance in college and worked in banking until 2018, when she left her job to pursue painting full-time. She has exhibited in New York, London, Cape Town, and Kampala. Through her portraiture, Mlengeya thematizes self-discovery and empowerment</p>
                    <p><a href="">Learn more</a></p>
                </div>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/sungi-mlengeya/1.jpg" alt="t" />
                    <figcaption>Kyomu</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/sungi-mlengeya/2.jpg" alt="t" />
                    <figcaption>Congressman John Lewis</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/sungi-mlengeya/4.jpg" alt="t" />
                    <figcaption>Unclench</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/sungi-mlengeya/3.jpg" alt="t" />
                    <figcaption>Kaa</figcaption>
                </figure>
                <figure class="c-gallery__item">
                    <img src="/img/clubs/art-club/gallery/sungi-mlengeya/5.jpg" alt="t" />
                    <figcaption>At the end of the evening</figcaption>
                </figure>
            </div>
        </div>
        <div></div>
    </main>

    <?php include '_inc/footer.php'; ?>
</body>

</html>
