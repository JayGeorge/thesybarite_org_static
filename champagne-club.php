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
    $page_title = "Home";
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
                <div class="image-with-text__question-box" style="background: hsl(168deg 100% 5%);">
                    <p>Access unique bottles from exclusive vineyards—delivered to your door every month.</p>
                </div>
            </header>
            <div class="u-above-ctas">
                <div class="article">
                    <div class="article__text">
                        <h2>Meet Edward, your bespoke wine curator</h2>
                        <p>Edward was born in London and raised in Chelsea in the ‘Swinging Sixties’. After prep school in Oxford and a north London grammar school, headed into the booming City of London of the 1980’s. By the turn of the millennium and after spells in New York City and Mionte Carlo he turned to the wine business.</p>
        
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
            </article>
        </div>
    </main>

    <?php include '_inc/footer.php'; ?>
</body>

</html>
