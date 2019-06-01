<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 02-Mar-2019, 04:22:28 AM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
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
                    <form class="form-horizontal" role="form" method="post" action="">

                        <?php
                            /*if (isset($_GET['customerid']))
                            {
                                $c_id = $_GET['customerid'];

                                $customer_edit = new Customer();
                                
                                $result = $customer_edit->selectForEdit($c_id);

                            }*/
                        ?>

                        <!-- CONTINUE >> CHANGE -->
                        <div class="content-body">
                            <h5 class="title">Identificação</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="username"><span class="required">*</span>Nome</label>
                                    <input type="text" class="form-control validate" id="username" name="txtusername" value="<?php echo $result['profile_user_name']; ?>" maxlength="64" required placeholder="Ex.: Tana Dol Ley">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="userreferencename">Nome em citações bibliográficas</label>
                                    <input type="text" class="form-control validate" id="userreferencename" name="txtuserreferencename" value="<?php echo $result['profile_user_profile_type']; ?>" maxlength="64" placeholder="Ex.: LEY, Tana Dol">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="userbirthdate"><span class="required">*</span>Data de Nascimento</label>
                                    <input type="text" class="form-control validate" id="userbirthdate" name="txtuserbirthdate" value="<?php echo $userBirthDate; ?>"  required placeholder="aaaa-mm-dd">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="usersex">Sexo</label>
                                    <select class="form-control" name="txtusersex" id="usersex" required aria-required="true">
                                        <option value="">(Escolha)</option>
                                        <option value="F">F</option>
                                        <option value="M">M</option>
                                    </select>
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="useremail">E-mail</label>
                                    <input type="email" class="form-control validate" id="useremail" name="txtuseremail" value="<?php echo $userBirthDate; ?>"  maxlength="64" placeholder="yourname@domain.com">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="userdocumentnumber">CPF</label>
                                    <input type="text" class="form-control validate" id="userdocumentnumber" name="txtuserdocumentnumber" value="<?php echo $userBirthDate; ?>"  maxlength="11" title="Não sera mostrado no curriculo" placeholder="Apenas numeros, ex.: 12345678900 (não sera mostrado no curriculo)">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="useraddress">Endereço</label>
                                    <input type="text" class="form-control validate" id="useraddress" name="txtuseraddress" value="<?php echo $userBirthDate; ?>" maxlength="250"  placeholder="Ex.: Rua Happiness, 123 - Bergen - Norway">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Formação acadêmica/titulação (as mais relevantes - ate 10 entradas)</h5>
                            <br>
                            <div class="card" id="degree-card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="degreename">Graduação</label>
                                    <input type="text" class="form-control validate" id="degreename" name="txtdegreename" value="<?php echo $result['profile_user_number']; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Biologia, Tecnico em Administração, etc">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="degreestartdate">Ano de Inicio</label>
                                    <input type="text" class="form-control validate" id="degreestartdate" name="txtdegreestartdate" value="<?php echo $userBirthDate; ?>" placeholder="aaaa">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="degreefinishdate">Ano de Conclusão</label>
                                    <input type="text" class="form-control validate" id="degreefinishdate" name="txtdegreefinishdate" value="<?php echo $userBirthDate; ?>" placeholder="aaaa">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="degreeinstitutionname">Nome da Instituição</label>
                                    <input type="text" class="form-control validate" id="degreeinstitutionname" name="txtdegreeinstitutionname" value="<?php echo $result['profile_user_number']; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: BIT - Banana Instutute of Technology">
                                </div>

                                <div class="md-form mb-5">
                                    <!-- Calling the script file for the functionality -->
                                    <script src="./js/dynamic_fields_degree_user.js"></script>
                                    <input type="button" class="btn btn-default" id="addmore" name="btnaddmore" value="&plus; Adicionar Mais" onclick="window.location.href='#'">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Cursos Extracurriculares (os mais relevantes - ate 20 entradas)</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="coursename">Curso</label>
                                    <input type="text" class="form-control validate" id="coursename" name="txtcoursename" value="<?php echo $result['profile_user_number']; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Computação, Libras, etc.">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="coursestartdate">Ano de Inicio</label>
                                    <input type="text" class="form-control validate" id="coursestartdate" name="txtcoursestartdate" value="<?php echo $userBirthDate; ?>" placeholder="aaaa">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="coursefinishdate">Ano de Conclusão</label>
                                    <input type="text" class="form-control validate" id="coursefinishdate" name="txtcoursefinishdate" value="<?php echo $userBirthDate; ?>" placeholder="aaaa">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="courseinstitutionname">Nome da Instituição</label>
                                    <input type="text" class="form-control validate" id="courseinstitutionname" name="txtcourseinstitutionname" value="<?php echo $result['profile_user_number']; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: COTECH - Coconut Institute of Technology">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Atuação Profissional (as mais relevantes - ate 20 entradas)</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="workpositionname">Posição</label>
                                    <input type="text" class="form-control validate" id="workpositionname" name="txtworkpositionname" value="<?php echo $result['profile_user_number']; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Professor, Estagiario(a), etc.">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="workstartdate">Ano de Inicio</label>
                                    <input type="text" class="form-control validate" id="workstartdate" name="txtworkstartdate" value="<?php echo $userBirthDate; ?>" placeholder="aaaa">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="workfinishdate">Ano de Conclusão</label>
                                    <input type="text" class="form-control validate" id="workfinishdate" name="txtworkfinishdate" value="<?php echo $userBirthDate; ?>" placeholder="aaaa">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="workinstitutionname">Nome da Instituição</label>
                                    <input type="text" class="form-control validate" id="workinstitutionname" name="txtworkinstitutionname" value="<?php echo $result['profile_user_number']; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: DelLabs">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Idiomas</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="languages">Posição</label>
                                    <input type="text" class="form-control validate" id="languages" name="txtlanguages" value="<?php echo $result['profile_user_number']; ?>" maxlength="32" title="máximo 32 caracteres" placeholder="Ex.: Inglês, Francês, etc.">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Trabalhos/Publicações</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="works">Nome do Trabalho/Publicação</label>
                                    <input type="text" class="form-control validate" id="works" name="txtworks" value="<?php echo $result['profile_user_number']; ?>" maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Sistemas Inteligentes">
                                </div>
                            </div>

                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="workslink">Link do Trabalho/Publicação</label>
                                    <input type="text" class="form-control validate" id="workslink" name="txtworkslink" value="<?php echo $result['profile_user_number']; ?>" maxlength="256" title="máximo 256 caracteres" placeholder="Ex.: https://www.intitution.com/publications/Sistemas-Inteligentes">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Outras Informações Relevantes</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="othersrelevantinformation">Nome do Trabalho/Publicação</label>
                                    <textarea class="form-control" name="txtothersrelevantinformation" rows="8" cols="80" maxlength="500"><?php echo $userBio; ?></textarea>
                                    <!-- Calling the script file for the functionality -->
                                    <p><span id="chars">500 </span> caracteres restantes.</p>
                                    <script src="./js/counting_characters_modal_resume.js"></script>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="save-button">
                            <button type="submit" class="btn btn-default" name="btnsave">Salvar</button>
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