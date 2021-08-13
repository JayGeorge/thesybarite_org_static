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
    // include '_inc/header.php';
?>

<?php /* for modules, use the below to link to your stylesheet */ ?>
<?php /* <link rel="stylesheet" href="style.css"> */?>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <?php /* Need tabindex="-1" to lock the tab focus here when using Skip to Content */?>
    <?php $filename = 'email'; include '_inc/_stylesheet.php'; ?>
    <main tabindex="-1" id="main" class="ripped">
        <div class="email-header">
            <img src="https://ci5.googleusercontent.com/proxy/dJBPjA53kTbmZa9rBqSNafWZdgs3T_42lSIFjI47kq2frc1mCAz1UGtjY6Opci15eg3G2mpT1tz0hTOc7BuLJHqI7ge7QfaR5VsSO-uazg3PlYKNpaayQg=s0-d-e1-ft#http://thesybarite.org/wp-content/uploads/2021/01/weblogo-300x300.png" alt="Sybarite" class="CToWUd" width="160">
        </div>
        <p class="thank-you">
            Thank you for your purchase at The Champagne Club.
        </div>
        <p>
            Great news! We are now preparing your order. It will leave our vineyards soon. We will send you an email to keep you informed.
        </p>
        <table>
            <tbody>
                <tr>
                    <th>Amount</th>
                    <td>£15.15</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        August 13, 2021
                    </td>
                </tr>
                <tr>
                    <th>Invoice</th>
                    <td>718</td>
                </tr>
                <tr>
                    <th>Transaction</th>
                    <td>9i8h7g6f5e</td>
                </tr>
            </tbody>
        </table>
    </main>

    <p class="signature">The Sybarite Team</p>

    <?php /* include '_inc/footer.php'; */ ?>
</body>

</html>
