<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 21-Feb-2019, 10:39:28 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <?php
                        Comment::displayComments($post['posts_id']);
                    ?>
                    <!-- <hr /></br /> -->
                </div>
            </div>
        </div>