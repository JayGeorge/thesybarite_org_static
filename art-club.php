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
        <div class="image-with-text">
            <div class="image-with-text__text">
                <h1><span>the</span>art <br/>club</h1>
            </div>
            <img src="/img/2.jpg" width="3456" height="2304" alt="Some alt text here" class="image-with-text__image">
            <button class="image-with-text__arrow">
                <?php include 'img/svg/down-arrow.php'; ?>
            </button>
        </div>
        <div class="question-box">
            <p>Unlimited access to the most exclusive London art galleries every month of the year.</p>
        </div>
    </main>

    <?php include '_inc/footer.php'; ?>
</body>

</html>
