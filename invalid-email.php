<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT    
    Created on    : 07-Feb-2019, 04:13:25 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    session_start();

    if (isset($_SESSION['session_invalid_email']))
    {
        $message = "O e-mail fornecido é inválido.";
        //echo "<br><hr><br>";
        header("Refresh: 60; url=login.php");

    }
    else
    {
        //session_destroy();
        //header("location: ./index.php");
        echo "<div><h5>Essa página irá retornar a página principal em 60 segundos.</h5></div>";
        echo "<br><hr><br>";
        header("Refresh: 60; url=login.php");

    }
?>

<?php
//INCLUDING THE HTML_HEAD_p1
include ('./features/HTML_HEAD_part1.php');
?>
<title>E-mail Inválido</title>
<?php
//INCLUDING THE HTML_HEAD_p2
include ('./features/HTML_HEAD_part2.php');
?>

<!-- The complement of the code for HTML_HEAD_part2.php -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style_message_pages.css' />
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

        
        <div class="container">
        <div class="message">
                <div class="text-center">
                    <div class="text-top">
                        <h4>Atenção!</h4>
                        <h4><?php echo $message; ?></h4>
                        <p>Caso tenha algum problema, contacte o administrador.</p>
                        <br><hr><br>
                        <h5>Essa página irá retornar a página principal em 60 segundos.</h5>
                    </div>
                    <form action="./login.php" method="post">
                        <input class="btn btn-default" type="submit" name="btnreturn" value="Voltar" id="return">
                    </form>
                </div>
            </div>
        </div>

<?php
//INCLUDING THE HTML_FOOTER
include ('./features/HTML_FOOTER.php');
?>