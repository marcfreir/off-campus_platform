<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 07-Mar-2019, 12:34:05 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

    
    <div class="card sticky-card" id="carduserinformation">
        <div class="content-body">
            <hr>
            <h4><a href="resume.php?username=<?php echo $username; ?>">Curriculo - <?php echo $username; ?></a></h4>
            <hr>
            <h4><a href="followers.php?username=<?php echo $username; ?>">Seguidores - <?php echo $username; ?></a></h4>
            <hr>
            <!--
            <form action="followers.php?username=<?php //echo $username; ?>" method="post">
                <input type="submit" class="btn btn-default" value="Seguidores">
            </form>
            -->
        </div>
    </div>
    <!-- <script src="./js/sticky_card_user_profile.js"></script> -->