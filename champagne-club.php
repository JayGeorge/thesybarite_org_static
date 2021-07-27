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
                <div class="image-with-text__question-box">
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

                <h2 class="large-title">The Wines</h2>
                <div class="feature-columns">
                    <div class="feature-columns__column">
                        <h3 class="feature-columns__title">Brugnon <em>Brut</em></h3>
                        <p class="feature-columns__description">A Champagne of intense fruits of apples and raisins on the nose. In the mouth this Champagne is refreshingly dry with great body and length. Philippe has the patience in his Champagne making not to use malolactic fermentation and this Brut is beautifully aged.</p>
                        <p class="feature-columns__description"><strong>Goes well with –</strong> Receptions with canapes, grilled chicken, dressed crab, grilled lobster & chips</p>
                        <ul class="feature-columns__stats">
                            <li><strong>70%</strong> Pinot Noir from Rilly-la-Montagne</li>
                            <li><strong>30%</strong> Chardonnay from Eceuil</li>
                        </ul>
                    </div>
                    <div class="feature-columns__column">
                        <h3 class="feature-columns__title">Brugnon <em>Rose</em></h3>
                        <p class="feature-columns__description">An explosion of red fruits on the nose, one almost has to wait to savour the fruits. In the mouth on the palate this produces a long dry satisfying finish. This rose is dry and fresh and does not leave the ‘dirty mouth’ sensation associated with other more industrial roses.</p>
                        <p class="feature-columns__description"><strong>Goes well with –</strong> Smoked salmon and dill, salmon en croute, dressed crab, grilled lobster & chips</p>
                        <ul class="feature-columns__stats">
                            <li><strong>100%</strong> pinot noir from Rilly-la-Montagne</li>
                        </ul>
                    </div>
                    <div class="feature-columns__column">
                        <h3 class="feature-columns__title">Brugnon <em>2011</em></h3>
                        <p class="feature-columns__description">This is a tremendous vintage Champagne absolutely at its’ peak. The Chardonnay is fully developed and it gives off that distinctly ‘pruny’ taste which demonstrates that it is at its’ best. The paleness of the Chardonnay has given way to a rich golden Champagne.</p>
                        <p class="feature-columns__description"><strong>Goes well with –</strong> Wedding cake, grilled chicken, raspberries and cream, almost anything sweet</p>
                        <ul class="feature-columns__stats">
                            <li><strong>70%</strong> Chardonnay from Eceuil</li>
                            <li><strong>30%</strong> Pinot Noir from Rilly-la-Montagne</li>
                        </ul>
                    </div>
                </div>
                <div><img src="/img/grapes-3.jpg" alt="wine" /></div>
                <h2 class="large-title">Clubs</h2>
                <div class="feature-columns feature-columns--l">
                    <div class="feature-columns__column">
                        <h3 class="feature-columns__title">Luxe <span class="feature-columns__title-motif">£1000</span></h3>
                        <p class="feature-columns__description"><strong>Paid quarterly</strong> for 4 cases of champagne. Each case contains 6 bottles of champagne.</p>
                        <!-- <div class="btn btn--1"><a href="">Subscribe</a></div> -->
                    </div>
                    <div class="feature-columns__column">
                        <h3 class="feature-columns__title">Deluxe <span class="feature-columns__title-motif">£1850</span></h3>
                        <p class="feature-columns__description"><strong>Paid quarterly</strong> for 8 cases of champagne. Each case contains 6 bottles of champagne.</p>
                        <!-- <div class="btn btn--1"><a href="">Subscribe</a></div> -->
                    </div>
                    <div class="feature-columns__column">
                        <h3 class="feature-columns__title">Bespoke <span class="feature-columns__title-motif">from £3500</span></h3>
                        <p class="feature-columns__description"><strong>Corporate bespoke collection</strong>. <a href="">Get in touch</a> with us for more details.</p>
                        <!-- <div class="btn btn--1"><a href="">Enquire</a></div> -->
                    </div>
                </div>
            </div>
        </article>
    </main>

    <?php include '_inc/footer.php'; ?>
</body>

</html>
