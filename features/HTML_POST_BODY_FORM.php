<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 18-Feb-2019, 01:00:03 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<!-- SHOWING THE POST BODY FORM -->
            <!-- COLLAPSIBLE COMMENT - BEGINNING -->
            
                <p>Click em "Escreva um Post" para criar um novo post.</p>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1"><i class="fa fa-comment"></i> Escreva um Post</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form action="profile.php?username=<?php echo $username; ?>" method="post" class="ajax" id="content">
                                    <textarea class="form-control" id="textarea-profile" name="txtpostbody" rows="8" cols="80" maxlength="3000"></textarea>
                                    <!-- Calling the script file for the functionality -->
                                    <p><span id="chars-post">3000 </span> caracteres restantes.</p>
                                    <script src="./js/counting_characters_profile.js"></script>
                                    <!-- <input type="submit" name="post" value="Post"> -->
                                    <button class="btn btn-default" type="submit" name="btnpost">Postar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            

            <!-- COLLAPSIBLE COMMENT - END -->