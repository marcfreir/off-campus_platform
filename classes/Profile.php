<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 05-Mar-2019, 10:16:00 AM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/
?>

<?php
//for a while
include ('DB.php');
//
    class Profile extends DB
    {
        public function selectProfile()
        {
            $sql = "SELECT * FROM tb_profile WHERE profile_userid=1";

            $result = $this->connect()->query($sql);

            if ($result)
            {
                /*while ($row = $result->fetch())
                {
                    //$data = array($row);
                    $data[] = $row;
                }*/
                //return $data;
                return $result;
            }
            else
            {
                echo "Ainda não há registros";
            }
        }
    }
?>