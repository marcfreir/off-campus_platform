<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 02-Mar-2019, 07:42:41 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //Just...
    //Here - just check if the user isn't the endorser itself -> will avoid the actual user from endorsing itself
    if ($userid == $followerid)
    {
        //Here - if is the userid is equal to the endorserid (in other words, if it is the actual user) this shows the Edit Resume Button including the Modal Form
        include ('./features/HTML_EDIT_PROFILE_BUTTON.php');
        include ('./features/HTML_MODAL_PROFILE_EDIT.php');
    }
?>