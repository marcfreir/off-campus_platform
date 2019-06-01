<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 01-Mar-2019, 11:02:05 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

    <div class="container" id="resume-name">
        <div class="text-center">
            <hr class="horizontal-rule">
            <!-- <h2>&#x1F4C3;</h2> -->
            <h1 class="resume-text">Currículo - @<?php echo $username; ?> <?php isVerified($verified); ?></h1>
            <hr class="horizontal-rule">
        </div>
        <form action="resume.php?username=<?php echo $username; ?>" method="post">
            <!-- <input type="submit" name="follow" value="Follow" id="follow"> -->
            <?php include ('./controllers/ControllerRecommendUnrecommend.php'); ?>
        </form>
        <div>
            <h4><span class="badge badge-light"><i><?php echo "Recomendações: "; ?><?php Endorser::showRecommendationNumber(); ?></i> &#x1F48E;</span></h4>
        </div>


        <div class="card" id="arealinks">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-body">
                        <hr>
                        <h2 class="text-center">&#x1F47E;</h2>
                        <h4><a href="profile.php?username=<?php echo $username; ?>">Perfil - <?php echo $username; ?></a></h4>
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
                
                <?php include ('./controllers/ControllerResumeUserData.php'); ?>
                <h4 class="">Identificação</h4>
                <hr>
                <h5>Nome Completo: <?php echo $userFullName; ?></h5>
                <h5>Referência em Bibliografia: <?php echo $userReferenceName; ?></h5>
                <h5>Data de Nascimento: <?php echo $userBirthDate; ?></h5>
                <h5>Sexo: <?php echo $userSex; ?></h5>
                <h5>E-mail: <?php echo $userEmail; ?></h5>
                <h5>Endereço: <?php echo $userAddress; ?></h5>
                <hr>

                
                
            </div>
            <div class="card" id="cardtop">
                
                <h4 class="">*Programa de Curso (Atual)</h4>
                <hr>
                <h5>Curso: <?php echo $degreeName; ?></h5>
                <h5>Ano de Inicio: <?php echo $degreeStartDate; ?></h5>
                <h5>Ano de Conclusão: <?php echo $degreeFinishDate; ?></h5>
                <h5>Nome da Instituição: <?php echo $degreeInstitutionName; ?></h5>
                <script src="./js/tooltip.js"></script>
                
            </div>
            <div class="card" id="cardtop">
                
                <h4 class="">Cursos Extracurriculares</h4>
                <hr>
                <h5>Curso(s): <?php echo $coursesName; ?></h5>
                
            </div>
            <div class="card" id="cardtop">
                
                <h4 class="">Atuação Profissional (atual)</h4>
                <hr>
                <h5>Posição: <?php echo $jobPositionName; ?></h5>
                <h5>Ano de Inicio: <?php echo $jobStartDate; ?></h5>
                <h5>Ano de Conclusão: <?php echo $jobFinishDate; ?></h5>
                <h5>Nome da Instituição: <?php echo $jobInstitutionName; ?></h5>
                
            </div>
            <div class="card" id="cardtop">
                
                <h4 class="">Idiomas</h4>
                <hr>
                <h5>Nome(s) do(s) Idioma(s): <?php echo $languages; ?></h5>
                
            </div>
            <div class="card" id="cardtop">
                
                <h4 class="">Trabalhos/Publicações</h4>
                <hr>
                <!-- collapsible START-->
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#academicpaperessay"><i class=""></i>Mostrar</a>
                            </h4>
                        </div>
                        <div id="academicpaperessay" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h5>Nome do Trabalho 1: <?php echo $academicPaperEssay_1; ?> Link: <?php echo $academicPaperEssayLink_1; ?></h5>
                                <hr>
                                <h5>Nome do Trabalho 2: <?php echo $academicPaperEssay_2; ?> Link: <?php echo $academicPaperEssayLink_2; ?></h5>
                                <hr>
                                <h5>Nome do Trabalho 3: <?php echo $academicPaperEssay_3; ?> Link: <?php echo $academicPaperEssayLink_3; ?></h5>
                                <hr>
                                <h5>Nome do Trabalho 4: <?php echo $academicPaperEssay_4; ?> Link: <?php echo $academicPaperEssayLink_4; ?></h5>
                                <hr>
                                <h5>Nome do Trabalho 5: <?php echo $academicPaperEssay_5; ?> Link: <?php echo $academicPaperEssayLink_5; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- collapsible END-->

            </div>
            <div class="card" id="cardtop">
                
                <h4 class="">Outras Informações Relevantes</h4>
                <hr>
                <h5>Info: </h5>
                <p><?php echo $othersRelevantInformation; ?></p>
                
            </div>
            <hr>
            <br>
            <!--
            <form action="" method="post">
                <button class="btn btn-default" type="button" name="btneditprofile" data-toggle="modal" data-target="#profile-modal">Editar Perfil</button>
            </form>
            -->
            <?php include ('./controllers/ControllerEditResume.php'); ?>
        </div>

        <div>
            <?php //include ('HTML_POST_BODY_FORM.php'); ?>
        </div>
        <div>
            <?php //include ('HTML_SHOW_POSTS.php'); ?>
        </div>
    </div>