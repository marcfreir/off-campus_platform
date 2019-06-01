<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 07-Feb-2019, 04:30:28 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<!-- THIS IS JUST A ALTERNATIVE TO CONTROL THE 'MESSAGE PAGES' -->

<?php
    //FOR "successfully-registered.php"

    session_start();

    if (isset($_SESSION['session_successfully_registered']))
    {

        header("location: ../successfully-registered.php");

    }
    
    //LOOKS LAME BUT THERE IS A MEANING TO REPEAT MANY TIMES THE CODE BELOW (SORRY)

    //FOR "email-already-used.php"

    elseif (isset($_SESSION['session_email_already_used']))
    {

        header("location: ../email-already-used.php");

    }

    //FOR "invalid-email.php"

    elseif (isset($_SESSION['session_invalid_email']))
    {

        header("location: ../invalid-email.php");

    }

    //FOR "invalid-password.php"

    elseif (isset($_SESSION['session_invalid_password']))
    {

        header("location: ../invalid-password.php");

    }

    //FOR "wrong-caracters.php"

    elseif (isset($_SESSION['session_wrong_caracters']))
    {

        header("location: ../wrong-caracters.php");

    }

    //FOR "invalid-username.php"

    elseif (isset($_SESSION['session_invalid_username']))
    {

        header("location: ../invalid-username.php");

    }

    //FOR "already-exists.php"

    elseif (isset($_SESSION['session_already_exists']))
    {

        header("location: ../already-exists.php");

    }

    else
    {
        session_destroy();
        header("location: ./login.php");
        //echo "<div><h5>Essa página irá retornar a página principal em 60 segundos.</h5></div>";
        //echo "<br><hr><br>";
        //header("Refresh: 60; url=login.php");

    }
?>