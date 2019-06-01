<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 13-Feb-2019, 06:30:55 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

    <h1>Desculpe! Senha errada</h1>
    <form action="./login.php" method="post">
        <input class="btn btn-default" type="submit" name="btnreturn" value="Voltar" id="return">
    </form>
<?php
    //Including the DB class
    //include ('./classes/DB.php');
?>
<?php
/*
    session_start();
    //var_dump($user_login);
    echo "<hr>";
    //var_dump($user_password);

    $limp = $_SESSION['session_wrongpass'];
    echo $limp;
    echo "<hr>";
    var_dump($_SESSION['session_wrongpass']);

    $user_login = "lili";

    $test_pass = DB::query('SELECT userpassword FROM tb_users WHERE username=:username', array(':username'=>$user_login))[0]['userpassword'];
    $user_pass = "1234abcd";

    echo "<hr>";
    var_dump($_SESSION['session_wrongpass']);
    echo "<hr>";
    $blic = password_verify($user_pass, $limp);
    var_dump($blic);

    */
?>