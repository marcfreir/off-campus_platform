<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 03-Mar-2019, 09:03:44 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

    <div class="container" id="profile-name">
        <div class="text-center">
            <hr class="horizontal-rule">
            <h1 class="profile-text">Seguidores - @<?php echo $username; ?> <?php isVerified($verified); ?></h1>
            <hr class="horizontal-rule">
        </div>
        <form action="followers.php?username=<?php echo $username; ?>" method="post">
            <!-- <input type="submit" name="follow" value="Follow" id="follow"> -->
            <?php include ('./controllers/ControllerFollowingUnfollowing.php'); ?>
        </form>
        <!--User Information -->
        <!-- START - OLD
        <div class="container">
            <div class="card">
                <hr>
                <?php //include ('./controllers/ControllerShowUserFollowers.php'); ?>
                <hr>
                <br> CONTINUE -->
                <!--
                <form action="" method="post">
                    <button class="btn btn-default" type="button" name="btneditprofile" data-toggle="modal" data-target="#profile-modal">Editar Perfil</button>
                </form>
                -->
                <?php //include ('./controllers/ControllerEditProfile.php'); ?>
                <!-- CONTINUE
            </div>
        </div>
        END - OLD -->

        <!-- START - NEW -->

        <div class="container" id="first">
            <div class="card" id="cardtop">
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-body">
                            <h2 class="text-center">&#x1F517;</h2>
                            <h4>Quem <?php echo $username; ?> segue</h4>
                            <hr>
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <?php include ('./controllers/ControllerShowUserFollowings.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-body">
                            <h2 class="text-center">&#x1F587;</h2>
                            <h4>Seguidores do(a) <?php echo $username; ?></h4>
                            <hr>
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <?php include ('./controllers/ControllerShowUserFollowers.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                <!--
                <form action="" method="post">
                    <button class="btn btn-default" type="button" name="btneditprofile" data-toggle="modal" data-target="#profile-modal">Editar Perfil</button>
                </form>
                -->
                <?php //include ('./controllers/ControllerEditProfile.php'); ?>
            </div>
        </div>

        <!-- END - NEW-->
        <div>
            <?php //include ('HTML_POST_BODY_FORM.php'); ?>
        </div>
        <div>
            <?php //include ('HTML_SHOW_POSTS.php'); ?>
        </div>
    </div>