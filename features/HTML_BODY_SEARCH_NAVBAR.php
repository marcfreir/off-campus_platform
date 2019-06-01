<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 21-Feb-2019, 12:53:40 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

    <div class="nav-right">
        <form action="index.php" method="post" class="navbar-form navbar-right" role="search" id="secondnavbar">
            <div class="form-group" id="searchitems">
                <input type="text" name="searchbox" class="form-control" title="Ex. Um o nome de um usuário" placeholder="Buscar">
            </div>
            <input type="submit" name="btnsearch" class="btn btn-default" id="searchitems" value="Buscar">
        </form>
    </div>
    <br />
    <br />

<?php
    //INCLUDING THE HTML_BODY_p2_V3
    include ('./controllers/ControllerSearchNavbar.php');
?>