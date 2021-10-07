<footer id="footer" class="site-footer site-footer--alt">
    <link rel="stylesheet" href="css/site-footer.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/temp.css">
    <div class="site-footer__columns">
        <nav>
            <ul>
                <li class="site-footer__heading">Explore</li>
                <?php $nav_name = 'About'; include '_inc/nav-links.php'; ?>
                <?php $nav_name = 'Experiences'; include '_inc/nav-links.php'; ?>
                <?php $nav_name = 'Magazine'; include '_inc/nav-links.php'; ?>
                <?php $nav_name = 'Africa'; include '_inc/nav-links.php'; ?>
                <?php $nav_name = 'Clubs'; include '_inc/nav-links.php'; ?>
                <li class="site-footer__cards">
                    <ul>
                        <li><?php include 'img/svg/visa.php'; ?></li>
                        <li><?php include 'img/svg/mastercard.php'; ?></li>
                        <li><img src="/img/payment-processing/pts.png" alt="PTS logo" style="width: 2em;" /></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li class="site-footer__heading">Learn</li>
                <?php $nav_name = 'Membership'; include '_inc/nav-links.php'; ?>
                <?php $nav_name = 'Partnership'; include '_inc/nav-links.php'; ?>
                <?php $nav_name = 'Contributors'; include '_inc/nav-links.php'; ?>
                <?php $nav_name = 'FAQs'; include '_inc/nav-links.php'; ?>
                <?php $nav_name = 'Contact'; include '_inc/nav-links.php'; ?>
            </ul>
        </nav>
        <?php include '_inc/sign-up-form.php'; ?>
    </div>
</footer>
<div class="js__modal">
    <div class="js__modalBox">
        <button class="js__closeModal">
            <svg aria-labelledby="title-modal-cancel" role="img" class="c-modal-close" width="100pt" height="100pt" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <path d="m91.668 19.172l-10.844-10.832-30.828 30.82-30.824-30.82-10.84 10.836 30.824 30.824-30.824 30.824 10.84 10.836 30.824-30.82 30.828 30.82 10.844-10.836-30.828-30.824z"></path>
            </svg>
        </button>
        <div class="js__modalBox__inner-scroll">Content that needs to be scrollable</div>
    </div>
</div>