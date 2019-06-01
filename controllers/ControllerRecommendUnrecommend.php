<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 01-Mar-2019, 11:53:50 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //Just...
    //Here - just check if the user isn't the endorser itself -> will avoid the actual user from endorsing itself
    if ($userid != $endorserid)
    {
        if ($isEndorsing)
        {
            //Here - if is already following this shows the Unrecommend Button
            include ('./features/HTML_UNRECOMMEND_BUTTON.php');
        }
        else
        {
            //Here - othewise this shows the Recommend Button
            include ('./features/HTML_RECOMMEND_BUTTON.php');
        }
    }
?>