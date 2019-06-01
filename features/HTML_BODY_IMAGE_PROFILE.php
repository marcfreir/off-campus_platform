<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 22-Feb-2019, 06:26:29 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    include ('./classes/ImageProfile.php');
    //include ('./controllers/ControllerImageProfileTemp.php');
?>
    <div class="container">
        <div class="image-center">    
            <!-- <img src="<?php //echo $grav_url; ?>" alt="Seu perfil Gravatar" title="Este é o seu Gravatar - para mudar você precisa criar uma perfil em 'https://www.gravatar.com'" /> -->
            <img src="<?php ImageProfile::getGravatar(); ?>" alt="Seu perfil Gravatar" title="Esta é imagem do perfil Gravatar - para mudar você precisa criar uma perfil em 'https://www.gravatar.com'" />
        </div>
        <!-- Change the header to a button and redirect to the Gravatar web site? -->
        <h5 class="gravatar-legend">(*<?php echo $username; ?> <a href="https://www.gravatar.com" target="_blank">Gravatar</a>)</h5>
    </div>