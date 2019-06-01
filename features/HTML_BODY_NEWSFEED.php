<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 11-Feb-2019, 08:11:35 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>


    <!-- NEWSFEED DIV -->
    <div id="newsfeedhome">
        <div class="newsfeed" id="home">
            <h1>~News Feed~</h1>
            <hr>
            <h4>Bem Vindo <?php echo $user; ?></h4>
            <hr>
                
                <?php
                    //include ('./classes/DB.php');
                    //include ('./classes/Login.php');
                    include ('./controllers/ControllerIndex.php');
                ?>
                    <!--
                    <h1>NewsFeed</h1>
                    <h1>Needs: Seach bar</h1>
                    <h1>Needs: container</h1>
                    <h1>Needs: maybe infinite scrool</h1>
                    <h1>Needs: classes to show the posts and recomendations buttons, etc</h1>
                    -->


                
        </div>        
    </div>
<!-- FINISHING THE HTML_BODY_part2_V3.php -->
</body>
</html>