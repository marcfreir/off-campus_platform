<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT    
    Created on    : 28-Nov-2018, 03:41:52 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    #JUST A TEST - START
    //include ('././assets/config/Config.php');
    //include ('../controllers/ControllerDB.php');

    //$sDB = Config::dec_enc('decrypt', $stringDB);
    //$uDBConfig = Config::dec_enc('decrypt', $userDB);
    #JUST A TEST - END
?>

<?php

    //NEW DB CLASS
    class DB #JUST FOR THE TEST extends Config
    {
        //private static function connect()
        protected function connect()
        {
            try
            {
                #JUST FOR THE TEST
                //$pdo = new PDO($sDB, $uDBConfig, $passDB);

                $pdo = new PDO('mysql:host=127.0.0.1;dbname=db_offcampus;charset=utf8', 'root', '');

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }
            catch (PDOException $e)
            {
                //throw $e;
                //SOME FANCY MESSAGE IF THERE IS NO CONNECTION TO THE DB
                /*
                echo "<h1>";
                echo "Connection with the DB is not set";
                echo "<br><hr>";
                echo "</h1>";
                die("ERROR: Could not connect. " . $e->getMessage());
                */

                //INSTEAD THE MESSAGE ABOVE, LET'S TRY REDIRECT TO ANOTHER PAGE
                session_start();
                $_SESSION['session_no_connection'] = 'ERROR: Could not connect. <br>' . $e->getMessage();
                header("location: ../not_connected_to_DB.php");

            }
        }

        public static function query($query, $params = array())
        {
            $statement = self::connect()->prepare($query);
            $statement->execute($params);

            if (explode(' ', $query)[0] == 'SELECT')
            {
                $data = $statement->fetchAll();
                return $data;
            }

           
        }
    }

    //OLD DB CLASS
    /*
    class DB
    {
        private static function connect()
        {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=db_offcampus;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }

        public static function query($query, $params = array())
        {
            $statement = self::connect()->prepare($query);
            $statement->execute($params);

            if (explode(' ', $query)[0] == 'SELECT')
            {
                $data = $statement->fetchAll();
                return $data;
            }

            
        }
    }
    */
?>