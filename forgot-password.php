<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 12-Feb-2019, 01:27:20 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //Just making more sense (for security matters) - but seems slow to render in the browser
    //INCLUDING THE HTML_HEAD_p1
    include ('./features/HTML_HEAD_part1.php');

    echo "<title>Esqueci a senha</title>";

    //INCLUDING THE HTML_HEAD_p2
    include ('./features/HTML_HEAD_part2.php');

    echo "<link rel='stylesheet' type='text/css' media='screen' href='./css/style_newsfeed.css' />
    <script src='./js/index.js'></script>
</head>";

    //INCLUDING THE HTML_BODY_p1_V3
    include ('./features/HTML_BODY_part1_V2.php');

    //INCLUDING THE HTML_BODY_p2_V3
    include ('./features/HTML_BODY_part2_V2.php');

    //INCLUDING THE HTML_BODY_p2_V3
    include ('./features/HTML_BODY_FORGOT_PASSWORD.php');

    //INCLUDING THE HTML_FOOTER
    include ('./features/HTML_FOOTER.php');
    
?>