<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 10-Mar-2019, 07:02:54 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<!-- <script src="./js/show_modal.js"></script> -->

    <div id="model-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
        <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" id="btnclose" style="margin-top: -16px; font-size: 28px;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><span class="label label-default">&times;</span></span>
                    </button>
                    <h3 class="modal-title w-100 font-weight-bold">Criar Artigo/Publicação</h3>
                </div>
                <div class="modal-body">
                    <!-- /START/ -->
                    
                    <!--form-->
                    <form action="./controllers/ControllerPublishContent.php" class="form-horizontal" role="form" method="post">

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
                            <h3 class="title">&#x1F4F0; <span class="label label-default">Novo Artigo/Publicação</span></h3>
                            <br>
                            <p class="">Algumas dicas:</p>
                            <hr>
                            <p class="">&#10112; <a data-toggle="tooltip" title="Ex.: &lt;b&gt;Texto&lt;/b&gt;">(Para textos em Negrito envolva-os em tags HTML &lt;b&gt;&lt;/b&gt;)</a></p>
                            <p class="">&#10113; <a data-toggle="tooltip" title="Ex.: &lt;i&gt;Texto&lt;/i&gt;">(Para textos em Italico envolva-os em tags HTML &lt;i&gt;&lt;/i&gt;)</a></p>
                            <p class="">&#10114; <a data-toggle="tooltip" title="Ex.: &lt;ins&gt;Texto&lt;/ins&gt;">(Para textos em Sublinhado envolva-os em tags HTML &lt;ins&gt;&lt;/ins&gt;)</a></p>
                            <p class="">&#10115; <a data-toggle="tooltip" title="Ex.: &lt;del&gt;Texto&lt;/del&gt;">(Para textos Traçado? envolva-os em tags HTML &lt;del&gt;&lt;/del&gt;)</a></p>
                            <p class="">&#10116; <a data-toggle="tooltip" title="Ex.: &lt;mark&gt;Texto&lt;/mark&gt;">(Para textos Marcados envolva-os em tags HTML &lt;mark&gt;&lt;/mark&gt;)</a></p>
                            <p class="">Os textos podem ser formatados com outras tags HTML - (Em breve sera disposto um editor.)</p>
                            <script src="./js/tooltip.js"></script>
                            <hr>

                            <div class="card" id="card-article-title">
                                <div class="article-title">
                                    <label class="" data-error="wrong" data-success="right" for="articlestitle"><p><a>&Hfr;</a> Titulo do Artigo <a>&Hfr;</a></p></label>
                                    <input type="text" class="form-control validate" id="articlestitle" name="txtarticlestitle" value="<?php echo $result['profile_user_number']; ?>" maxlength="256" data-toggle="tooltip" title="máximo 256 caracteres" placeholder="Ex.: Titulo de Sua Publicação">
                                </div>
                            </div>

                            <!-- First Part -->
                            <div class="card">

                                <!-- collapsible -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#collapse1"><i class=""></i> Parte 1</a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <!-- <div class="md-form mb-5"> -->
                                                    <label data-error="wrong" data-success="right" for="articlesbody_p1">Primeira Parte (importante)</label>
                                                    <textarea class="form-control" id="articlesbody_p1" name="txtarticlesbody_p1" rows="8" cols="80" maxlength="500" requited><?php echo $userBio; ?></textarea>
                                                    <!-- Calling the script file for the functionality -->
                                                    <p><span id="chars_articlesbody_p1">500 </span> caracteres restantes.</p>
                                                    <script src="./js/counting_characters_modal_contents.js"></script>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapsible -->

                            </div>

                            <!-- Second Part -->
                            <div class="card">

                                <!-- collapsible -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#collapse2"><i class=""></i> Parte 2</a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <!-- <div class="md-form mb-5"> -->
                                                    <label data-error="wrong" data-success="right" for="articlesbody_p2">Segunda Parte (opcional)</label>
                                                    <textarea class="form-control" id="articlesbody_p2" name="txtarticlesbody_p2" rows="8" cols="80" maxlength="500"><?php echo $userBio; ?></textarea>
                                                    <!-- Calling the script file for the functionality -->
                                                    <p><span id="chars_articlesbody_p2">500 </span> caracteres restantes.</p>
                                                    <script src="./js/counting_characters_modal_contents.js"></script>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapsible -->

                            </div>

                            <!-- Third Part -->
                            <div class="card">

                                <!-- collapsible -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#collapse3"><i class=""></i> Parte 3</a>
                                            </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <!-- <div class="md-form mb-5"> -->
                                                    <label data-error="wrong" data-success="right" for="articlesbody_p3">Terceira Parte (opcional)</label>
                                                    <textarea class="form-control" id="articlesbody_p3" name="txtarticlesbody_p3" rows="8" cols="80" maxlength="500"><?php echo $userBio; ?></textarea>
                                                    <!-- Calling the script file for the functionality -->
                                                    <p><span id="chars_articlesbody_p3">500 </span> caracteres restantes.</p>
                                                    <script src="./js/counting_characters_modal_contents.js"></script>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapsible -->

                            </div>

                        </div>


                        <hr>
                        <div class="publish-button">
                            <button type="submit" class="btn btn-default" name="btnpublish">Publicar</button>
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