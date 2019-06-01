<?php
/*
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 25-Nov-2018, 07:23:11 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
//INCLUDING THE HTML_HEAD_p1
include ('./features/HTML_HEAD_part1.php');
?>
<title>Bug Report</title>
<?php
//INCLUDING THE HTML_HEAD_p2
include ('./features/HTML_HEAD_part2.php');
?>

<!-- The complement of the code for HTML_HEAD_part2.php -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style_message_pages.css" />
    <script src="./js/index.js"></script>
</head>

<?php
//INCLUDING THE HTML_BODY_p1_V1
include ('./features/HTML_BODY_part1_V2.php');
?>
<?php
//INCLUDING THE HTML_BODY_p2_V1
include ('./features/HTML_BODY_part2_V2.php');
?>

        <div id="home-404">
            <div class="landing-image">
                <img src="./images/feed-back-bug.png" class="img-responsive" id="landing-img-sorry">
                
            
            </div>
            
        </div>
        <div class="container">
            <div class="textarea-feed">
                <div class="text-center">
                    <form action="./controllers/ControllerBugReport.php" method="post">
                        <textarea class="form-control" name="txtfeedbackarea" rows="3" cols="50" id="feedbackarea" maxlength="500"></textarea>
                        <!-- Calling the script file for the functionality -->
                        <p><span id="chars_bug_report">500 </span> caracteres restantes.</p>
                        <script src="./js/counting_characters_bug-report.js"></script>
                        <input class="btn btn-default" type="submit" name="feed" value="Enviar" id="feed">
                    </form>
                </div>
            </div>
        </div>

<?php
//INCLUDING THE HTML_FOOTER
include ('./features/HTML_FOOTER.php');
?>