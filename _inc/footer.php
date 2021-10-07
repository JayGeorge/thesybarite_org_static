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
<div class="js__modal js__modal--short">
    <div class="js__modalBox">
        <button class="js__closeModal">
            <svg aria-labelledby="title-modal-cancel" role="img" class="c-modal-close" width="100pt" height="100pt" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <path d="m91.668 19.172l-10.844-10.832-30.828 30.82-30.824-30.82-10.84 10.836 30.824 30.824-30.824 30.824 10.84 10.836 30.824-30.82 30.828 30.82 10.844-10.836-30.828-30.824z"></path>
            </svg>
        </button>
        <div class="js__modalBox__inner-scroll">
            <div class="c-form-wrapper">
                <form class="c-form" id="pp-form-456b1b1" method="post" action="https://experienceluxury.co/register/?wpe-login=true">
                    <input type="hidden" id="ppe-lf-login-nonce" name="ppe-lf-login-nonce" value="472c193598">
                    <input type="hidden" name="_wp_http_referer" value="/login/">
                    <input type="hidden" name="redirect_to" value="/login/">
                    <div class="c-form-cols">
                        <div class="c-form-cols__col c-form-cols__col--full-width">
                            <label for="user" class="elementor-field-label">Username or Email Address</label>
                            <input size="1" type="text" name="log" id="user" placeholder=" Username or Email Address">
                        </div>
                        <div class="c-form-cols__col c-form-cols__col--full-width">
                            <label for="password" class="elementor-field-label">Password</label>
                            <input size="1" type="password" name="pwd" id="password" placeholder="Password">
                        </div>
                        <div class="c-form-cols__col c-form-cols__col--full-width">
                            <label for="pp-login-remember-me">
                                <input type="checkbox" id="elementor-login-remember-me" name="rememberme" value="forever">
                                <span>Remember Me</span>
                            </label>
                        </div>
                        <div class="c-form-cols__col c-form-cols__col--full-width">
                            <button type="submit" name="wp-submit" class="c-btn c-btn--1">
                                Log In
                            </button>
                        </div>
                        <div class="c-form__notes c-form-cols__col c-form-cols__col--full-width">
                            <p><a href="/login/?lost_pass=1">Lost your password?</a></p>
                            <p>Not regisetered yet? <a href="https://experienceluxury.co/membership/">Create an account</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>