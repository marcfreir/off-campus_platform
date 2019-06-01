<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 12-Mar-2019, 06:43:32 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

        <!-- This is just the implementation of the CKEditor v4.0 -->
        <div class="container">
            <script src="./assets/ckeditor/ckeditor.js"></script>

            <!-- COLLAPSIBLE COMMENT - BEGINNING -->
            
            <p>Click e tente criar um novo conteudo via Editor.</p>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1"><i class="fa fa-comment"></i> Crie um Conteudo</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form action="profile.php?username=<?php //echo $username; ?>" method="post" class="ajax" id="content">
                                    <textarea class="form-control" id="textarea-content" name="txtcontent" rows="8" cols="80" maxlength="3000"></textarea>
                                    <!-- Calling the script file for the functionality -->
                                    <p><span id="chars-content">3000 </span> caracteres restantes.</p>
                                    <script src="./js/counting_characters_content.js"></script>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor
                                        // instance, using default configuration.
                                        CKEDITOR.replace( 'textarea-content' );
                                    </script>
                                    <!-- <input type="submit" name="post" value="Post"> -->
                                    <button class="btn btn-default" type="submit" name="btnpubviaeditor">Publicar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- COLLAPSIBLE COMMENT - END -->
        </div>
            