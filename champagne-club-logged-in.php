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
        <article>
            <header class="image-with-text">
                <div class="image-with-text__text">
                    <h1><span>the</span> champagne <br/>club</h1>
                </div>
                <img src="/img/1.jpg" width="3456" height="2304" alt="Some alt text here" class="image-with-text__image">
                <button class="image-with-text__arrow">
                    <?php include 'img/svg/down-arrow.php'; ?>
                </button>
                <div class="c-cta-box">
                    <p>Access unique bottles from exclusive vineyards—delivered to your door every quarter.</p>
                </div>
            </header>
            <div class="u-width-max-1">
                <p class="c-entry-lead">
                    <em>Florentine</em>, welcome to The Champagne Club, an <em>exclusive</em> community of champagne lovers, looking to expand their champagne portfolio and knowledge beyond the familiar.
                </p>
                <div class="s-entry-content s-entry-content--columns">
                    <p>Access to the Champagne Club opens a sparkling world of undiscovered, boutique vineyards, sourced by our in-house champagne curator, whose 25+ years knowledge of the region is unrivalled.</p>

                    <p>Customise your quarterly champagne delivery according to how many bottles and which types of champagne you are looking for. The champagnes we source are continuously expanding as part of our passion for supporting small producers, all of whom produce under 100,000 bottles a year and are difficult to source in the UK and US.</p>

                    <p>Discover the unique offering of the Champagne region like never before. Join our exclusive champagne community, learn more about the vineyards we work with and select which champagne package works best for you. We’ll do the rest.<p>
                </div>
            </div>
            <div class="c-article">
                <div class="o-article-grid o-article-grid--with-image">
                    <div class="o-article-grid__column-1">
                        <h2>Meet Edward, your bespoke wine curator</h2>
                        <p>Edward was born in London and raised in Chelsea in the ‘Swinging Sixties’. After prep school in Oxford and a north London grammar school, headed into the booming City of London of the 1980’s. By the turn of the millennium and after spells in New York City and Monte Carlo he turned to the wine business.</p>

                        <p>What had started as a twice yearly run to Champagne for his city friends morphed into a business importing and distributing Champagne in the UK Europe the USA and Asia.</p>
        
                        <p>By the age of 50 it was time for a change and Edward left his base in Mayfair and headed to his family home in a mountain village in Granada for a supposedly quieter life.</p>
                    </div>
                    <div class="o-article-grid__column-2">
                        <figure>
                            <img src="/img/edward.jpg" alt="Edward" />
                            <figcaption>Edward, our expert wine curator</figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="u-width-max-1">
                <h2 class="large-title">A Year in Champagne</h2>
                <p class="c-entry-lead"><em>Florentine</em>, start your Champagne journey with a Premier Cru from Rilly-la-Montagne and progress to the Grand Cru villages of Ambonnay, where Krug has its' Clos d'Ambonnay Avize and Tours-Sur-Marne the home of Laurent-Perrier.</p>

                <div class="feature-image">
                    <img src="/img/vineyard-with-people.jpg" alt="test">
                </div>
                <h3>Our Vineyard: Philippe Brugnon</h3>
                <div class="s-entry-content s-entry-content--columns s-entry-content--compressed">
                    <p>Let us start with the <em>Champagnes of Philippe Brugnon</em>, a fourth generation grower from Rilly-la-Montagne on the Montagne de Reims. Rilly-la-Montagne is 1er Cru and is also the home of Champagne Cattier, the producer of Armand de Brignac. Philippe's land in Rilly la Montagne is given over mainly to the Pinot Noir grape where it thrives and is noticeable in his cuvees.</p>

                    <p>The Pinot Noir tends to produce a wine with notes of red fruits, has great body and tends to be ready to drink earlier than the Chardonnay which requires much more bottle age for the acidity to turn to fruit. This is why I tend to order Blanc de Blancs Champagne (100% Chardonnay) only when it is Vintage and has a minimum of 9 years age from the year of harvest.</p>

                    <p>The picture of the statue of Bacchus (the Roman god of wine) on the label is a give away that Rilly-la-Montagne is a place for good wines!</p>
                    <!-- <p>We recommend that this vintage be drunk within the year as beyond that it will not continue to improve. The remaining stock is limited and as soon as it is finished we will be looking at the 2015, another top year but not quite so appealing....yet!</p> -->
                </div>
            </div>

            <div class="u-width-max-1">
                <details>
                    <summary>How the Champagne Club works</summary>
                    <div class="s-entry-content s-entry-content--columns">
                        <p><strong>We work exclusively with smaller producers in the Champagne region</strong>. We believe their product reflects the terroir of their land—something which is often lost by the larger producer who might be looking for product consistency across various tracts of land in different parts of the Champagne region.</p>

                        <p><strong>Learn more about the grapes that have gone into your bottles</strong>, from distinct flavours to the occasions they are best suited to, to food pairings and fun facts about the vineyards. Our curator provides detailed information on each champagne that we stock.</p>

                        <p><strong>You can customize your champagne profile quarterly</strong>, which allows you to taste and order  accordingly, depending on which bubbles you want when.</p>

                        <p><strong>keep your favourites or try something entirely new</strong>, from your first champagne order to your next. Have a specific request? We have bespoke packages available for whatever your champagne needs may be.</p>
                    </div>
                </details>
            </div>

            <div class="u-width-max-1">
                <h2 class="large-title">Champagnes</h2>
            </div>
            <!-- <div class="u-width-max-1">
                <p class="c-entry-lead">We recommend that this vintage be drunk within the year as beyond that it will not continue to improve. The remaining stock is limited and as soon as it is finished we will be looking at the 2015, another top year but not quite so appealing....yet!</p>
            </div> -->
            <div class="feature-columns">
                <div class="feature-columns__column">
                    <h3 class="feature-columns__title">Brugnon <em>Brut</em></h3>
                    <p class="feature-columns__description"><strong>Flavour –</strong> A Champagne of intense fruits of apples and raisins on the nose. In the mouth this Champagne is refreshingly dry with great body and length. Philippe has the patience in his Champagne making not to use malolactic fermentation and this Brut is beautifully aged.</p>
                    <p class="feature-columns__description"><strong>Food pairings –</strong> The versatility of the Brut allows it to shine at receptions with canapes, but is best served with grilled chicken, try wild mushroom risotto, rosti, tuna tartare.</p>
                    <ul class="feature-columns__stats">
                        <li><strong>70%</strong> Pinot Noir from Rilly-la-Montagne</li>
                        <li><strong>30%</strong> Chardonnay from Eceuil</li>
                    </ul>
                </div>
                <div class="feature-columns__column">
                    <h3 class="feature-columns__title">Brugnon <em>Rose</em></h3>
                    <p class="feature-columns__description"><strong>Flavour –</strong> An explosion of red fruits on the nose, one almost has to wait to savour the fruits. In the mouth on the palate this produces a long dry satisfying finish. This rose is dry and fresh and does not leave the ‘dirty mouth’ sensation associated with other more industrial roses.</p>
                    <p class="feature-columns__description"><strong>Food pairings –</strong> Serve the Rose with smoked salmon and dill, salmon en croute, dressed crab, grilled lobster & chips</p>
                    <ul class="feature-columns__stats">
                        <li><strong>100%</strong> pinot noir from Rilly-la-Montagne</li>
                    </ul>
                </div>
                <div class="feature-columns__column">
                    <h3 class="feature-columns__title">Brugnon <em>2011</em></h3>
                    <p class="feature-columns__description"><strong>Flavour –</strong> This is a tremendous vintage Champagne absolutely at its’ peak. The Chardonnay is fully developed and it gives off that distinctly ‘pruny’ taste which demonstrates that it is at its’ best. The paleness of the Chardonnay has given way to a rich golden Champagne.</p>
                    <p class="feature-columns__description"><strong>Food pairings –</strong> Great with wedding cake!! Raspberries and cream a glass of the 2011 will complement almost anything fruity and sweet.</p>
                    <ul class="feature-columns__stats">
                        <li><strong>70%</strong> Chardonnay from Eceuil</li>
                        <li><strong>30%</strong> Pinot Noir from Rilly-la-Montagne</li>
                    </ul>
                </div>
            </div>
            <div class="feature-image feature-image--ripped"><img src="/img/grapes-3.jpg" alt="wine" /></div>
            <div class="u-width-max-1">
                <h2 class="medium-title">Choose a Membership</h2>
            </div>
            <div class="feature-columns feature-columns--l">
                <div class="feature-columns__column">
                    <h3 class="feature-columns__title">Le Débutant <span class="feature-columns__title-motif">£1000</span></h3>
                    <p class="feature-columns__description">Paid quarterly for 4 cases of champagne. Each case contains 6 bottles of champagne.</p>
                    <div class="c-btn c-btn--1"><a href="">Subscribed <span>✔</span></a></div>
                </div>
                <div class="feature-columns__column">
                    <h3 class="feature-columns__title">Le Connoisseur <span class="feature-columns__title-motif">£1850</span></h3>
                    <p class="feature-columns__description">Paid quarterly for 8 cases of champagne. Each case contains 6 bottles of champagne.</p>
                    <div class="c-btn c-btn--2"><a href="">Upgrade</a></div>
                </div>
                <div class="feature-columns__column">
                    <h3 class="feature-columns__title">La Suprême <span class="feature-columns__title-motif">on request</span></h3>
                    <p class="feature-columns__description">Corporate bespoke collection. <a href="">Get in touch</a> with us for more details.</p>
                    <div class="c-btn c-btn--2"><a href="">Enquire</a></div>
                </div>
            </div>
        </article>
    </main>

    <?php include '_inc/footer.php'; ?>
</body>

</html>
