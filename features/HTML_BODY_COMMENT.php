<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 21-Feb-2019, 05:17:20 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

        <!-- COLLAPSIBLE COMMENT - BEGINNING -->
        <?php
            //$postID = $post['posts_id']; 
        ?>
        <div class="container">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#<?php echo $post['posts_id']; ?>"><i class="fa fa-comment"></i>Comente Aqui</a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="<?php echo $post['posts_id']; ?>">
                        <div class="panel-body">
                            <form action="index.php?postid=<?php echo $post['posts_id']; ?>" method="post">
                                <div class="btn-group">
                                    <textarea class="form-control" name="txtcommentbody" rows="3" cols="80" id="textareaaa" maxlength="1500"></textarea>
                                    <!-- Calling the script file for the functionality -->
                                    <p><span id="chars_comment">1500 </span> caracteres restantes.</p>
                                    <script src="./js/counting_characters_comment.js"></script>
                                    <input class="btn btn-default" type="submit" name="btncomment" value="Comentar" id="aaaaaareload">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COLLAPSIBLE COMMENT - END -->