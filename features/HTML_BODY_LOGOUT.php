<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 03-Mar-2019, 01:50:22 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

        <div id="container">
            <div class="message">
                <div class="text-center">
                    <div class="text-top">
                        <h1>Logout de sua conta</h1>
                        <hr>
                        <p>Você tem certeza que deseja sair?</p>
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
                        <h5>Essa página irá retornar a página principal em 60 segundos.</h5>
                    </div>
                </div>
            </div>
        </div>