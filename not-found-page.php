<?php
/*
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 25-Nov-2018, 06:52:31 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
//INCLUDING THE HTML_HEAD_p1
include ('./features/HTML_HEAD_part1.php');
?>
<title>Página Não Encontrada</title>
<?php
//INCLUDING THE HTML_HEAD_p2
include ('./features/HTML_HEAD_part2.php');
?>

<!-- The complement of the code for HTML_HEAD_part2.php -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style_index.css' />
    <script src='./js/index.js'></script>
</head>

<?php
//INCLUDING THE HTML_BODY_p1_V1
include ('./features/HTML_BODY_part1_V1.php');
?>
<?php
//INCLUDING THE HTML_BODY_p2_V1
include ('./features/HTML_BODY_part2_V1.php');
?>

        <div id="home-404">
            <!-- <div class="landing-text"> -->
            <div class="landing-image">
                <!-- <h1>BLUECAT</h1> -->
                <img src="./images/sad-404.png" class="img-responsive" id="landing-img">
                <!-- <h3>Error 404 - Page not found</h3> -->
                <img src="./images/sorry-404.png" class="img-responsive" id="landing-img-sorry">
                <!-- <h3>[What about Create a New One? Eh!]</h3> -->
                <img src="./images/what_about-404.png" class="img-responsive" id="landing-img-whatabout">
                <div class="text-center">
                    <a href="create-account.php" class="btn btn-default btn-lg">Criar Nova Conta</a>
                </div>
            
            </div>
        </div>

<?php
//INCLUDING THE HTML_FOOTER
include ('./features/HTML_FOOTER.php');
?>