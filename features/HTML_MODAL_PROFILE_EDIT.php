<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 28-Feb-2019, 07:11:50 AM
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
                    <h3 class="modal-title w-100 font-weight-bold">Editar Perfil</h3>
                </div>
                <div class="modal-body">
                    <!-- /START/ -->           
                    <!--form-->
                    <form action="./controllers/ControllerEditProfileModal.php" class="form-horizontal" role="form" method="post">
                        <!-- CONTINUE >> CHANGE -->
                        <div class="content-body">
                            <h5 class="title">Identificação</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="username"><span class="required">*</span>Nome Completo</label>
                                    <input type="text" class="form-control validate" id="username" name="txtuserfullname" value="<?php echo $userFullName; ?>" maxlength="64" required placeholder="Ex.: Tana Dol Ley">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="userprofiletype">Perfil</label>
                                    <!-- <input type="text" class="form-control validate" id="userprofiletype" name="txtuserprofiletype" value="<?php //echo $userProfileType; ?>" maxlength="10"> -->
                                    <select class="form-control" name="txtuserprofiletype" id="userprofiletype" required aria-required="true">
                                        <option value="">(Escolha)</option>
                                        <option value="Estudante">Estudante</option>
                                        <option value="Professor">Professor</option>
                                    </select>
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="userbirthdate"><span class="required">*</span>Data de Nascimento</label>
                                    <input type="date" class="form-control validate" id="userbirthdate" name="txtuserbirthdate" value="<?php echo $userBirthDate; ?>"  required placeholder="aaaa-mm-dd">
                                </div>

                                <div class="md-form mb-5">
                                    <!-- <label data-error="wrong" data-success="right" for="usersex">Sexo</label> -->
                                    <!-- <input type="text" class="form-control validate" id="usersex" name="txtusersex" value="<?php //echo $userSex; ?>"> -->
                                    <label data-error="wrong" data-success="right" for="usersex">Sexo</label>
                                    <select class="form-control" name="txtusersex" id="usersex" required aria-required="true">
                                        <option value="">(Escolha)</option>
                                        <option value="F">F</option>
                                        <option value="M">M</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content-body">
                            <h5 class="title">*Dados Institucionais</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="usernumber">Matricula</label>
                                    <input type="text" class="form-control validate" id="usernumber" name="txtusernumber" value="<?php echo $userNumber; ?>" maxlength="12" title="12 caracteres" placeholder="123456789222">
                                </div>
                                <p>*Caso não esteja matriculado em uma instituição, deixar em branco.</p>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="orcid">OrcID</label>
                                    <input type="text" class="form-control validate" id="orcid" name="txtuserorcid" value="<?php echo $userOrcid; ?>" maxlength="19" title="Formato com separação 0000-0000-0000-0000" placeholder="Ex.: 0000-0000-0000-0000">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="usereducationtype">Tipo de Educação</label>
                                    <!-- <input type="text" class="form-control validate" id="usereducationtype" name="txtusereducationtype" value="<?php //echo $userEducationType; ?>" maxlength="12" title="máximo 300 caracters"> -->
                                    <select class="form-control" name="txtusereducationtype" id="usereducationtype" required aria-required="true">
                                        <option value="">(Escolha)</option>
                                        <option value="Homeschool">Homeschool</option>
                                        <option value="Privada">Privada</option>
                                        <option value="Publica">Publica</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content-body">
                            <h5 class="title">Localização</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="usercity">Cidade</label>
                                    <input type="text" class="form-control validate" id="usercity" name="txtusercity" value="<?php echo $userCity; ?>" maxlength="64" title="máximo 64 caracters" placeholder="Ex.: Townsville">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="userstateprovince">Estado/Provincia</label>
                                    <input type="text" class="form-control validate" id="userstateprovince" name="txtuserstateprovince" value="<?php echo $userStateProvince; ?>" maxlength="64" title="máximo 64 caracters" placeholder="Ex.: New York">
                                </div>

                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="usercountry">Pais</label>
                                    <input type="text" class="form-control validate" id="usercountry" name="txtusercountry" value="<?php echo $userCountry; ?>" maxlength="32" title="máximo 32 caracters" placeholder="Ex.: Norway">
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <h5 class="title">Resumo</h5>
                            <br>
                            <div class="card">
                                <div class="md-form mb-5">
                                    <label data-error="wrong" data-success="right" for="userbio">Biografia/Resumo</label>
                                    <textarea class="form-control" name="txtuserbio" rows="8" cols="80" maxlength="300"><?php echo $userBio; ?></textarea>
                                    <!-- Calling the script file for the functionality -->
                                    <p><span id="chars">300 </span> caracteres restantes.</p>
                                    <script src="./js/counting_characters_modal_profile.js"></script>
                                    <!-- <input type="text" class="form-control validate" id="userbio" name="txtuserbio" value="<?php //echo $result['profile_bio']; ?>" maxlength="300" title="máximo 300 caracters" placeholder="Ex.: "> -->
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="save-button">
                            <button type="submit" class="btn btn-default" name="btnsaveuser">Salvar</button>
                        </div>

                    </form>

                    <!-- /END/ -->
                </div>
                
                <div class="modal-footer d-flex justify-content-center">
                    <form action="profile.php" method="post">
                        <!-- <button type="submit" class="btn btn-default" name="btnsave">Salvar</button> -->
                        <!-- <input type="submit" class="btn btn-default" name="btnsave" value="Salvar"> -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>