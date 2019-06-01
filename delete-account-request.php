<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT    
    Created on    : 09-Feb-2019, 05:02:32 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php

    session_start();

    if (isset($_POST['btndeleteaccount']))
    {

        //echo "<div class='text-top'><h4>Parabéns!</h4></div>";
        //echo "<br>";
        //echo "<div class='text-top'><h4>Usuário Registrado com Sucesso.</h4></div>";
        //echo "<br><hr><br>";
        //echo "<div class='text-center'><h5>Essa página irá retornar a página principal em 60 segundos.</h5></div>";
        $message = "Após requerer a exclusão da sua conta o usuário só poderá cancelar a operação entrando em contato com o suporte.";
        //echo "<br><hr><br>";
        //header("Refresh: 60; url=index.php");
        //>>INSERT INTO TABLE TB_DELETE_ACCOUNT_REQUEST ID AND USERNAME
        //>>THE TECHNICIAN (OPERATOR) WILL RECEIVE THE REQUEST ON THE CONTROL PANEL AND PROCEED WITH THE OPERATION IN SOME DAYS
        //>>THE USER CAN CANCEL THE REQUEST ONLY BY CONTACTING THE TECHNICIAN (OPERATOR)
        //header("location: SessionNewsFeed.php");

    }
    else
    {
        //session_destroy();
        //header("location: ./index.php");
        //echo "<div><h5>Essa página irá retornar a página principal em 60 segundos.</h5></div>";
        //echo "<br><hr><br>";
        $message = "Após requerer a exclusão da sua conta o usuário só poderá cancelar a operação entrando em contato com o suporte.";
        header("Refresh: 60; url=login.php");

    }


//INSTEAD THE CODE ABOVE -> INCLUDE THE BridgeMessagePagesAPI.php
//include ('./controllers/BridgeMessagePagesAPI.php.php');
?>

<?php
//INCLUDING THE HTML_HEAD_p1
include ('./features/HTML_HEAD_part1.php');
?>
<title>Excluir Conta</title>
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
include ('./features/HTML_BODY_part1_V4.php');
?>
<?php
//INCLUDING THE HTML_BODY_p2_V1
include ('./features/HTML_BODY_part2_V4.php');
?>

        
        <div class="container">
        <div class="message">
                <div class="text-center">
                    <div class="text-top">
                        <h4>Atenção!</h4>
                        <p><?php echo $message; ?></p>
                        <br><hr><br>
                        <h4>Deseja continuar com a operação?</h4>
                        <form action="./controllers/ControllerDeleteAccountRequest.php" method="post">
                            <input class="btn btn-default" type="submit" name="btndelete" value="Excluir" id="return">
                        </form>
                        <br><hr><br>
                        <h5>Essa página irá retornar a página principal em 60 segundos.</h5>
                    </div>
                    <form action="./settings.php" method="post">
                        <input class="btn btn-default" type="submit" name="btnreturn" value="Voltar" id="return">
                    </form>
                </div>
            </div>
        </div>

<?php
//INCLUDING THE HTML_FOOTER
include ('./features/HTML_FOOTER.php');
?>