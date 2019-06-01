<?php
    //INCLUDING THE CLASS DB 
    include ('./classes/DB.php');
?>

<?php
    //CREATING ACCOUNT
    if (isset($_POST['createaccount']))
    {
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];

        //If there is NO username like that
        if (!DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$username)))
        {
            DB::query('INSERT INTO tb_users VALUES (NULL, :username, :useremail, :userpassword)', array(':username'=>$username, ':useremail'=>$useremail, ':userpassword'=>$userpassword));
            echo "<h2>success!</h2>";
        }
        else
        {
            $var = $_POST['username'];
            echo "user already exists!".$var;
            //echo "<h2>user already exists!</h2>";
            //die;
        }

        
    }
?>