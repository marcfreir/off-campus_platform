<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 14-Feb-2019, 04:01:44 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

    <div class="container" id="profile-name">
        
        <div class="text-center">
            <hr class="horizontal-rule">
            <h1 class="profile-text">Perfil - @<?php echo $username; ?> <?php isVerified($verified); ?></h1>
            <hr class="horizontal-rule">
        </div>
    
    
        <form action="profile.php?username=<?php echo $username; ?>" method="post">
            <!-- <input type="submit" name="follow" value="Follow" id="follow"> -->
            <?php include ('./controllers/ControllerFollowingUnfollowing.php'); ?>
        </form>
        
        
        <div class="card" id="arealinks">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-body">
                        <hr>
                        <h2 class="text-center">&#x1F4C3;</h2>
                        <h4><a href="resume.php?username=<?php echo $username; ?>">Curriculo - <?php echo $username; ?></a></h4>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-body">
                        <hr>
                        <h2 class="text-center">&#x1F32C;</h2>
                        <h4><a href="followers.php?username=<?php echo $username; ?>">Seguidores - <?php echo $username; ?></a></h4>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        
        <!--User Information -->
        
        <div class="card">
            <hr>
            <div class="card" id="cardtop">
                
                <?php include ('./controllers/ControllerProfileUserData.php'); ?>
                <h4 class="">Identificação</h4>
                <hr>
                <h5>Nome Completo: <?php echo $userFullName; ?></h5>
                <h5>Perfil: <?php echo $userProfileType; ?></h5>
                <h5>Data de Nascimento: <?php echo $userBirthDate; ?></h5>
                <h5>Sexo: <?php echo $userSex; ?></h5>
                <hr>

                
                
            </div>
            <div class="card" id="cardtop">
                
                <h4 class="">*Dados Institucionais</h4>
                <hr>
                <h5><a data-toggle="tooltip" title="*Caso não esteja matriculado em uma instituição, deixar em branco.">Matricula:</a> <?php echo $userNumber; ?></h5>
                <h5>OrcID: <?php echo $userOrcid; ?></h5>
                <h5>Tipo de Educação: <?php echo $userEducationType; ?></h5>
                <script src="./js/tooltip.js"></script>
                
            </div>
            <div class="card" id="cardtop">
                
                <h4 class="">Localização</h4>
                <hr>
                <h5>Cidade: <?php echo $userCity; ?></h5>
                <h5>Estado/Provincia: <?php echo $userStateProvince; ?></h5>
                <h5>Pais: <?php echo $userCountry; ?></h5>
                
            </div>
            <div class="card" id="cardtop">
                
                <h4 class="">Resumo</h4>
                <hr>
                <h5>Biografia/Resumo </h5>
                <p><?php echo $userBio; ?></p>
                
            </div>
            <hr>
            <br>
            <!--
            <form action="" method="post">
                <button class="btn btn-default" type="button" name="btneditprofile" data-toggle="modal" data-target="#profile-modal">Editar Perfil</button>
            </form>
            -->
            <?php include ('./controllers/ControllerEditProfile.php'); ?>
        </div>
        

        <!--
        <div class="container" id="first">
            <div class="card" id="cardtop">
                <h4>Area - <?php //echo $username; ?></h4>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="content-body">
                            <h4>Perfil - <?php //echo $username; ?></h4>
                            <hr>
                            <form action="profile.php?username=<?php //echo $username; ?>" method="post">
                                <input type="submit" class="btn btn-default" value="Perfil">
                            </form>
                            <?php //include ('./controllers/ControllerShowUserFollowings.php'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content-body">
                            <h4>Seguidores - <?php //echo $username; ?></h4>
                            <hr>
                            <form action="followers.php?username=<?php //echo $username; ?>" method="post">
                                <input type="submit" class="btn btn-default" value="Seguidores">
                            </form>
                            <?php //include ('./controllers/ControllerShowUserFollowers.php'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content-body">
                            <h4>Curriculo - <?php //echo $username; ?></h4>
                            <hr>
                            <form action="resume.php?username=<?php //echo $username; ?>" method="post">
                                <input type="submit" class="btn btn-default" value="Curriculo">
                            </form>
                            <?php //include ('./controllers/ControllerShowUserFollowers.php'); ?>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        -->

        <div>
            <?php include ('HTML_POST_BODY_FORM.php'); ?>
        </div>
        <div>
            <?php include ('HTML_SHOW_POSTS.php'); ?>
        </div>
    </div>