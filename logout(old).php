<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 11-Feb-2019, 10:08:28 AM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/
?>

<?php
    include ('./classes/DB.php');
    include ('./classes/Login.php');

    session_start();

    if (isset($_SESSION['session_invalid_password']))
    {
        session_start();
        $message = "Você tem certeza que deseja sair?";
        $message_return = "Essa página irá retornar a página principal em 60 segundos.";
        $_SESSION['session_message'] = $message;
        $_SESSION['session_message_return'] = $message_return;
        //echo "<br><hr><br>";
        header("Refresh: 60; url=login.php");

    }
    else
    {
        //session_destroy();
        //header("location: ./index.php");
        //echo "<div><h5>Essa página irá retornar a página principal em 60 segundos.</h5></div>";
        //echo "<br><hr><br>";
        //$message = "Você tem certeza que deseja sair?";
        //$message_return = "Essa página irá retornar a página principal em 60 segundos.";
        session_destroy();
        header("Refresh: 60; url=login.php");

    }
?>

<?php
//INCLUDING THE HTML_HEAD_p1
include ('./features/HTML_HEAD_part1.php');
?>
<title>Senha Inválida</title>
<?php
//INCLUDING THE HTML_HEAD_p2
include ('./features/HTML_HEAD_part2.php');
?>

<!-- The complement of the code for HTML_HEAD_part2.php -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style_settings.css' />
    <script src='./js/index.js'></script>
</head>

<?php
//INCLUDING THE HTML_BODY_p1_V4
include ('./features/HTML_BODY_part1_V4.php');
?>
<?php
//INCLUDING THE HTML_BODY_p2_V4
include ('./features/HTML_BODY_part2_V4.php');
?>

        <!--
        <div class="container">
        <div class="message">
                <div class="text-center">
                    <div class="text-top">
                        <h4>Atenção!</h4>
                        <h4>A senha fornecida é inválida.</h4>
                        <p>Tenha certeza que a senha possue de 6 a 32 carácteres.</p>
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
        -->

        <div id="container">
            <div class="message">
                <div class="text-center">
                    <div class="text-top">
                        <h1>Logout de sua conta</h1>
                        <hr>
                        <p><?php echo $_SESSION['session_message']; ?></p>
                        <form action="./controllers/ControllerLogout.php" method="post">
                            <label for="chkbx" class="container">
                                <p>Marque se você quer sair de todos os dispositivos?</p>
                                <input type="checkbox" name="chkboxalldevices" value="alldevices" id="chkbx">
                                <span class="checkmark"><i>Sair de todos os dispositivos</i></span>
                            </label>
                            <div class="text-center">
                                <input type="submit" name="btnconfirm" value="Confirmar" class="btn btn-default btn-lg">
                            </div>
                        </form>
                        <hr>
                        <!-- <h5>Essa página irá retornar a página principal em 60 segundos.</h5> -->
                        <h5><?php echo $_SESSION['session_message_return']; ?></h5>
                    </div>
                </div>
            </div>
        </div>

<?php
//INCLUDING THE HTML_FOOTER
include ('./features/HTML_FOOTER.php');
?>