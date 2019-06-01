<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 11-Feb-2019, 11:39:19 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<body>
    <div class="login-clean">
        <form action="./controllers/ControllerForgotPassword.php" method="post">
            <div class="illustration">
                <i class="logo">
                    <img src="./images/login-off-c.png" alt="" id="cat">
                </i>
            </div>
            <div class="illustration">
                <h2 class="box-title">Esqueci minha senha</h2>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="txtuseremail" name="txtuseremail" title="Seu e-mail" placeholder="Ex.: nome@dominio.com">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" id="ca" name="btnforgotpassword" data-bs-hover-animate="shake" value="Enviar">
                <!-- <button class="btn btn-primary btn-block" id="ca" type="button" data-bs-hover-animate="shake">Create Account</button> -->
            </div>
            <a href="index.php" class="forgot">Desisti! Tire-me daqui.</a>
        </form>
    </div>
</body>
</html>