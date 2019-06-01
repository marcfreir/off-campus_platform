<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 11-Feb-2019, 11:39:19 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>


    <div class="login-clean">
        <form action="./controllers/ControllerChangePassword.php" method="post">
            <div class="illustration">
                <i class="logo">
                    <img src="./images/login-off-c.png" alt="" id="cat">
                </i>
            </div>
            <div class="illustration">
                <h2 class="box-title">Trocar senha</h2>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="txtuseroldpassword" name="txtuseroldpassword" title="Senha atual" placeholder="Sua antiga senha">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="txtusernewpassword" name="txtusernewpassword" title="Nova senha" placeholder="Sua nova senha">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="txtusernewpasswordrepeat" name="txtusernewpasswordrepeat" title="Nova senha" placeholder="Repita sua nova senha">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" id="ca" name="btnchangepassword" data-bs-hover-animate="shake" value="Trocar">
                <!-- <button class="btn btn-primary btn-block" id="ca" type="button" data-bs-hover-animate="shake">Trocar</button> -->
            </div>
            <a href="index.php" class="forgot">Desisti! Tire-me daqui.</a>
        </form>
    </div>
</body>
</html>