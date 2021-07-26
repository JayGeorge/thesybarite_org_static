<footer id="footer" class="site-footer site-footer--alt">
    <link rel="stylesheet" href="css/site-footer.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/temp.css">
    <nav>
        <ul>
            <li class="site-footer__heading">Explore</li>
            <?php $nav_name = 'About'; include '_inc/nav-links.php'; ?>
            <?php $nav_name = 'Experiences'; include '_inc/nav-links.php'; ?>
            <?php $nav_name = 'Magazine'; include '_inc/nav-links.php'; ?>
            <?php $nav_name = 'Africa'; include '_inc/nav-links.php'; ?>
            <?php $nav_name = 'Clubs'; include '_inc/nav-links.php'; ?>
        </ul>
        <ul>
            <li class="site-footer__heading">Learn More</li>
            <?php $nav_name = 'Membership'; include '_inc/nav-links.php'; ?>
            <?php $nav_name = 'Partnership'; include '_inc/nav-links.php'; ?>
            <?php $nav_name = 'Contributors'; include '_inc/nav-links.php'; ?>
            <?php $nav_name = 'FAQs'; include '_inc/nav-links.php'; ?>
            <?php $nav_name = 'Contact'; include '_inc/nav-links.php'; ?>
        </ul>
    </nav>
    <?php include '_inc/sign-up-form.php'; ?>
</footer>