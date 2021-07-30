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
    $page_title = "Champagne Club";
    $current_nav = 'home';
    $some_variable_to_pass_into_the_include = 'aaaaaaaaaaaaaaaaaaaa';
    // then you just echo $some_variable_to_pass_into_the_include inside the include
    include '_inc/head.php';
    include '_inc/header.php';
?>

<?php /* for modules, use the below to link to your stylesheet */ ?>
<?php /* <link rel="stylesheet" href="style.css"> */?>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <?php /* Need tabindex="-1" to lock the tab focus here when using Skip to Content */?>
    <main tabindex="-1" id="main">
        <article>
            <header class="image-with-text">
                <div class="image-with-text__text">
                    <h1><span>the</span> champagne <br/>club</h1>
                </div>
                <img src="/img/1.jpg" width="3456" height="2304" alt="Some alt text here" class="image-with-text__image">
                <button class="image-with-text__arrow">
                    <?php include 'img/svg/down-arrow.php'; ?>
                </button>
                <div class="image-with-text__cta-box">
                    <p>Access unique bottles from exclusive vineyards—delivered to your door every quarter.</p>
                </div>
            </header>
            <div class="u-above-ctas">
                <div class="u-width-max-1">
                    <p class="entry-lead">
                        <a href="#form">Sign up</a> to The Champagne Club, an exclusive community of champagne lovers, looking to expand their champagne portfolio and knowledge beyond the familiar.
                    </p>
                    <div class="s-entry-content s-entry-content--columns">
                        <p>Access to the Champagne Club opens a sparkling world of undiscovered, boutique vineyards, sourced by our in-house champagne curator, whose 25+ years knowledge of the region is unrivalled.</p>

                        <p>Customise your quarterly champagne delivery according to how many bottles and which types of champagne you are looking for. The champagnes we source are continuously expanding as part of our passion for supporting small producers, all of whom produce under 100,000 bottles a year and are difficult to source in the UK and US.</p>

                        <p>Discover the unique offering of the Champagne region like never before. <a href="">Join our exclusive champagne community</a>, where you’ll learn more about the vineyards we work with and select which champagne package works best for you. We’ll do the rest.<p>
                    </div>
                    <img src="/img/purple-grapes.jpg" alt="test" class="side-image" />
                </div>
                <div class="article">
                    <div class="article__text">
                        <h2>Meet Edward, your bespoke wine curator</h2>
                        <p>Edward was born in London and raised in Chelsea in the ‘Swinging Sixties’. After prep school in Oxford and a north London grammar school, headed into the booming City of London of the 1980’s. By the turn of the millennium and after spells in New York City and Monte Carlo he turned to the wine business.</p>
        
                        <p>What had started as a twice yearly run to Champagne for his city friends morphed into a business importing and distributing Champagne in the UK Europe the USA and Asia.</p>
        
                        <p>By the age of 50 it was time for a change and Edward left his base in Mayfair and headed to his family home in a mountain village in Granada for a supposedly quieter life.</p>
                    </div>
                    <div class="article__image">
                        <figure>
                            <img src="/img/edward.jpg" alt="Edward" />
                            <figcaption>Edward, our expert wine curator</figcaption>
                        </figure>
                    </div>
                </div>
                
                <h2 class="large-title">How it works</h2>
                <div class="u-width-max-1">
                    <div class="s-entry-content s-entry-content--compressed s-entry-content--columns">
                        <p><strong>We work exclusively with smaller producers in the Champagne region</strong>. We believe their product reflects the terroir of their land—something which is often lost by the larger producer who might be looking for product consistency across various tracts of land in different parts of the Champagne region.</p>

                        <p><strong>Learn more about the grapes that have gone into your bottles</strong>, from distinct flavours to the occasions they are best suited to, to food pairings and fun facts about the vineyards. Our curator provides detailed information on each champagne that we stock.</p>

                        <p><strong>You can customize your champagne profile quarterly</strong>, which allows you to taste and order  accordingly, depending on which bubbles you want when.</p>

                        <p><strong>keep your favourites or try something entirely new</strong>, from your first champagne order to your next. Have a specific request? We have bespoke packages available for whatever your champagne needs may be.</p>
                    </div>
                </div>

                <!-- <div class="feature-image">
                <img src="/img/vineyard-with-people.jpg" alt="test" />
                </div> -->

                <h2 class="medium-title">Sign up for Free</h2>
                <div id="form" class="u-width-max-1">
                    <p class="entry-lead">@Cedric form goes here</p>
                </div>
            </div>
        </article>
    </main>

    <?php include '_inc/footer.php'; ?>
</body>

</html>
