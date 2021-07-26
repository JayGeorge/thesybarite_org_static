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
    <form method="post" name="Sign up">
        <div>
            <label>
                First Name
            </label>
            <input size="1" type="text">
        </div>
        <div>
            <label>
                Surname
            </label>
            <input size="1" type="text" placeholder="First Name">
        </div>
        <div>
            <label>
                Email
            </label>
            <input size="1" type="email">
        </div>
        <div>
            <label>
                Password
            </label>
            <input size="1" type="email">
        </div>
        <button type="submit">
            Sign up
        </button>
    </form>
</footer>