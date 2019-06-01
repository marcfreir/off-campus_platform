<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 09-Mar-2019, 09:36:55 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<!-- <script src="./js/show_modal.js"></script> -->

    <div id="profile-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
        <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" style="margin-top: -16px; font-size: 28px;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title w-100 font-weight-bold">Editar Currículo</h3>
                </div>
                <div class="modal-body">
                    <!-- /START/ -->
                    <!--form-->
                    <form action="./controllers/ControllerEditResumeModal.php" class="form-horizontal" role="form" method="post">
                        <!-- CONTINUE >> CHANGE -->
                        <div class="content-body">
                            <h5 class="title">Identificação</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="userfullname"><span class="required">*</span>Nome</label>
                                    <input type="text" class="form-control validate" id="userfullname" name="txtuserfullname" value="<?php echo $userFullName; ?>" maxlength="64" required placeholder="Ex.: Tana Dol Ley">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="userreferencename">Nome em citações bibliográficas</label>
                                    <input type="text" class="form-control validate" id="userreferencename" name="txtuserreferencename" value="<?php echo $userReferenceName; ?>" maxlength="64" placeholder="Ex.: LEY, Tana Dol">
                                </div>

                                <div class="md-form col-md-6">
                                    <label data-error="wrong" data-success="right" for="userbirthdate"><span class="required">*</span>Data de Nascimento</label>
                                    <input type="date" class="form-control validate" id="userbirthdate" name="txtuserbirthdate" value="<?php echo $userBirthDate; ?>"  required placeholder="aaaa-mm-dd">
                                </div>

                                <div class="md-form col-md-6">
                                    <label data-error="wrong" data-success="right" for="usersex">Sexo</label>
                                    <select class="form-control" id="usersex" name="txtusersex" required aria-required="true">
                                        <option value="">(Escolha)</option>
                                        <option value="F">F</option>
                                        <option value="M">M</option>
                                    </select>
                                </div>

                                <div class="md-form col-md-6">
                                    <label data-error="wrong" data-success="right" for="useremail">E-mail</label>
                                    <input type="email" class="form-control validate" id="useremail" name="txtuseremail" value="<?php echo $userEmail; ?>"  maxlength="64" placeholder="yourname@domain.com">
                                </div>

                                <div class="md-form col-md-6">
                                    <label data-error="wrong" data-success="right" for="userdocumentnumber">CPF</label>
                                    <input type="text" class="form-control validate" id="userdocumentnumber" name="txtuserdocumentnumber" value="<?php echo $userDocumentNumber; ?>"  maxlength="11" title="Não sera mostrado no curriculo" placeholder="Apenas numeros, ex.: 12345678900 (não sera mostrado no curriculo)">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="useraddress">Endereço</label>
                                    <input type="text" class="form-control validate" id="useraddress" name="txtuseraddress" value="<?php echo $userAddress; ?>" maxlength="250"  placeholder="Ex.: Rua Happiness, 123 - Bergen - Norway">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Programa de Curso</h5>
                            <br>
                            <div class="card" id="degree-card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="degreename">Curso(s)</label>
                                    <input type="text" class="form-control validate" id="degreename" name="txtdegreename" value="<?php echo $degreeName; ?>" maxlength="128" title="máximo 128 caracteres" placeholder="Ex.: Biologia, Tecnico em Administração, etc">
                                </div>

                                <div class="md-form col-md-6">
                                    <label data-error="wrong" data-success="right" for="degreestartdate">Ano de Inicio</label>
                                    <input type="text" class="form-control validate" id="degreestartdate" name="txtdegreestartdate" value="<?php echo $degreeStartDate; ?>" maxlength="4" placeholder="aaaa">
                                </div>

                                <div class="md-form col-md-6">
                                    <label data-error="wrong" data-success="right" for="degreefinishdate">Ano de Conclusão</label>
                                    <input type="text" class="form-control validate" id="degreefinishdate" name="txtdegreefinishdate" value="<?php echo $degreeFinishDate; ?>" maxlength="4" placeholder="aaaa">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="degreeinstitutionname">Nome da Instituição</label>
                                    <input type="text" class="form-control validate" id="degreeinstitutionname" name="txtdegreeinstitutionname" value="<?php echo $degreeInstitutionName; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: BIT - Banana Instutute of Technology">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Cursos Extracurriculares</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="coursesname">Curso(s)</label>
                                    <input type="text" class="form-control validate" id="coursesname" name="txtcoursesname" value="<?php echo $coursesName; ?>" maxlength="128" title="máximo 128 caracteres" placeholder="Ex.: Computação, Libras, etc.">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Atuação Profissional (atual)</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="jobpositionname">Posição</label>
                                    <input type="text" class="form-control validate" id="jobpositionname" name="txtjobpositionname" value="<?php echo $jobPositionName; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Professor, Estagiario(a), etc.">
                                </div>

                                <div class="md-form col-md-6">
                                    <label data-error="wrong" data-success="right" for="jobstartdate">Ano de Inicio</label>
                                    <input type="text" class="form-control validate" id="jobstartdate" name="txtjobstartdate" value="<?php echo $jobStartDate; ?>" maxlength="4" placeholder="aaaa">
                                </div>

                                <div class="md-form col-md-6">
                                    <label data-error="wrong" data-success="right" for="jobfinishdate">Ano de Conclusão</label>
                                    <input type="text" class="form-control validate" id="jobfinishdate" name="txtjobfinishdate" value="<?php echo $jobFinishDate; ?>" maxlength="4" placeholder="aaaa">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="jobinstitutionname">Nome da Instituição</label>
                                    <input type="text" class="form-control validate" id="jobinstitutionname" name="txtjobinstitutionname" value="<?php echo $jobInstitutionName; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: DelLabs">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Idiomas</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="languages">Nome(s) do(s) Idioma(s)</label>
                                    <input type="text" class="form-control validate" id="languages" name="txtlanguages" value="<?php echo $languages; ?>" maxlength="32" title="Para muitos, separe por '-'. Máximo 32 caracteres" placeholder="Ex.: Inglês - Francês - etc.">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Trabalhos/Publicações (ate 5)</h5>
                            <br>

                            <div class="card">

                                <!-- collapsible -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#collapse1"><i class=""></i> Preencher</a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessay1">Nome do Trabalho/Publicação(1)</label>
                                                    <input type="text" class="form-control validate" id="paperessay1" name="txtpaperessay1" value="<?php echo $academicPaperEssay_1; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Sistemas Inteligentes">
                                                </div>

                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessaylink1">Link do Trabalho/Publicação(1)</label>
                                                    <input type="text" class="form-control validate" id="paperessaylink1" name="txtpaperessaylink1" value="<?php echo $academicPaperEssayLink_1; ?>" maxlength="256" title="máximo 256 caracteres" placeholder="Ex.: https://www.intitution.com/publications/Sistemas-Inteligentes">
                                                </div>

                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessay2">Nome do Trabalho/Publicação(2)</label>
                                                    <input type="text" class="form-control validate" id="paperessay2" name="txtpaperessay2" value="<?php echo $academicPaperEssay_2; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Sistemas Inteligentes">
                                                </div>

                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessaylink2">Link do Trabalho/Publicação(2)</label>
                                                    <input type="text" class="form-control validate" id="paperessaylink2" name="txtpaperessaylink2" value="<?php echo $academicPaperEssayLink_2; ?>" maxlength="256" title="máximo 256 caracteres" placeholder="Ex.: https://www.intitution.com/publications/Sistemas-Inteligentes">
                                                </div>

                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessay3">Nome do Trabalho/Publicação(3)</label>
                                                    <input type="text" class="form-control validate" id="paperessay3" name="txtpaperessay3" value="<?php echo $academicPaperEssay_3; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Sistemas Inteligentes">
                                                </div>

                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessaylink3">Link do Trabalho/Publicação(3)</label>
                                                    <input type="text" class="form-control validate" id="paperessaylink3" name="txtpaperessaylink3" value="<?php echo $academicPaperEssayLink_3; ?>" maxlength="256" title="máximo 256 caracteres" placeholder="Ex.: https://www.intitution.com/publications/Sistemas-Inteligentes">
                                                </div>

                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessay4">Nome do Trabalho/Publicação(4)</label>
                                                    <input type="text" class="form-control validate" id="paperessay4" name="txtpaperessay4" value="<?php echo $academicPaperEssay_4; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Sistemas Inteligentes">
                                                </div>

                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessaylink4">Link do Trabalho/Publicação(4)</label>
                                                    <input type="text" class="form-control validate" id="paperessaylink4" name="txtpaperessaylink4" value="<?php echo $academicPaperEssayLink_4; ?>" maxlength="256" title="máximo 256 caracteres" placeholder="Ex.: https://www.intitution.com/publications/Sistemas-Inteligentes">
                                                </div>

                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessay5">Nome do Trabalho/Publicação(5)</label>
                                                    <input type="text" class="form-control validate" id="paperessay5" name="txtpaperessay5" value="<?php echo $academicPaperEssay_5; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Sistemas Inteligentes">
                                                </div>

                                                <div class="md-form col-md-6">
                                                    <label data-error="wrong" data-success="right" for="paperessaylink5">Link do Trabalho/Publicação(5)</label>
                                                    <input type="text" class="form-control validate" id="paperessaylink5" name="txtpaperessaylink5" value="<?php echo $academicPaperEssayLink_5; ?>" maxlength="256" title="máximo 256 caracteres" placeholder="Ex.: https://www.intitution.com/publications/Sistemas-Inteligentes">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapsible -->
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Outras Informações Relevantes</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="othersrelevantinformation">Info</label>
                                    <textarea class="form-control" id="othersrelevantinformation" name="txtothersrelevantinformation" rows="8" cols="80" maxlength="500"><?php echo $othersRelevantInformation; ?></textarea>
                                    <!-- Calling the script file for the functionality -->
                                    <p><span id="chars">500 </span> caracteres restantes.</p>
                                    <script src="./js/counting_characters_modal_resume.js"></script>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="save-button">
                            <button type="submit" class="btn btn-default" name="btnsaveresumeuser">Salvar</button>
                        </div>

                    </form>

                                <!-- /END/ -->
                </div>
                
                <div class="modal-footer d-flex justify-content-center">
                    <form action="resume.php" method="post">
                        <!-- <button type="submit" class="btn btn-default" name="btnsave">Salvar</button> -->
                        <!-- <input type="submit" class="btn btn-default" name="btnsave" value="Salvar"> -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>