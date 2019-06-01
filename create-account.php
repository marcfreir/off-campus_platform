<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 28-Nov-2018, 02:31:25 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    //INCLUDING THE HTML_HEAD_part1
    include ('./features/HTML_HEAD_part1.php');
?>
<title>Register</title>
<?php
    //INCLUDING THE HTML_HEAD_part2
    include ('./features/HTML_HEAD_part2.php');
?>

<!-- The complement of the code for HTML_HEAD_part2.php -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style_create-account.css' />
    <script src='./js/index.js'></script>
</head>

<?php
    //INCLUDING THE HTML_BODY_part1_V2
    include ('./features/HTML_BODY_part1_V2.php');
?>
<?php
    //INCLUDING THE HTML_BODY_part2_V2
    include ('./features/HTML_BODY_part2_V2.php');
?>

<?php
    //INCLUDING THE CLASS DB 
    include ('./classes/DB.php');
?>

<?php
/*
    //CREATING ACCOUNT
    if (isset($_POST['createaccount']))
    {
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];

        //If there is NO username like that
        if (!DB::query('SELECT username FROM tb_users WHERE username=:username', array(':username'=>$username)))
        {
            //Checking the length of the username
            if (strlen($username) >= 3 && strlen($username) <= 32)
            {
                if (preg_match('/[a-zA-Z0-9_]+/', $username))
                {
                    if (strlen($userpassword) >= 6 && strlen($userpassword) <=60)
                    {
                        if (filter_var($useremail, FILTER_VALIDATE_EMAIL))
                        {
                            DB::query('INSERT INTO tb_users VALUES (NULL, :username, :useremail, :userpassword)', array(':username'=>$username, ':useremail'=>$useremail, ':userpassword'=>password_hash($userpassword, PASSWORD_BCRYPT)));
                            //TEST
                            echo "<h2>success!</h2><br/>";
                            echo "<h2>success!</h2><br/>";
                            echo "<h2>success!</h2><br/>";
                        }
                        else
                        {
                            echo "<h2>INVALID EMAIL!</h2>".$useremail."<br/>";
                            echo "<h2>INVALID EMAIL!</h2>".$useremail."<br/>";
                            echo "<h2>INVALID EMAIL!</h2>".$useremail."<br/>";
                        }
                    }
                    else
                    {
                        echo "<h2>INVALID PASSWORD!</h2>".$userpassword."<br/>";
                        echo "<h2>INVALID PASSWORD!</h2>".$userpassword."<br/>";
                        echo "<h2>INVALID PASSWORD!</h2>".$userpassword."<br/>";
                    }                    
                }
                else
                {
                    echo "<h2>INVALID USERNAME!</h2>".$username."<br/>";
                    echo "<h2>INVALID USERNAME!</h2>".$username."<br/>";
                    echo "<h2>INVALID USERNAME!</h2>".$username."<br/>";
                }
                
            }
            else
            {
                echo "<h2>INVALID USERNAME!</h2>".$username."<br/>";
                echo "<h2>INVALID USERNAME!</h2>".$username."<br/>";
                echo "<h2>INVALID USERNAME!</h2>".$username."<br/>";
            }
            
        }
        else
        {
            //TEST
            $var = $_POST['username'];
            echo "<h2>user already exists!</h2>".$var."<br/>";
            echo "<h2>user already exists!</h2>".$var."<br/>";
            echo "<h2>user already exists!</h2>".$var."<br/>";
            echo "<h2>user already exists!</h2>".$var."<br/>";
            echo "<h2>user already exists!</h2>".$var."<br/>";
            echo "<h2>user already exists!</h2>".$var."<br/>";

            //echo "<h2>user already exists!</h2>";
            //die;
        }

        
    }
*/    
?>

    <div class="signup-clean">
        <form action="./controllers/ControllerRegister.php" method="post">
            <div class="illustration">
                <i class="logo">
                    <img src="./images/login-off-c.png" alt="" id="logo-off">
                </i>
            </div>
            <div class="illustration">
                <h2 class="box-title">Novo Usuário</h2>
            </div>
            <div class="form-group">
                <input class="form-control" id="username" type="text" name="txtusername" title="Será o seu login" placeholder="Nome do usuário">
            </div>
            <div class="form-group">
                <input class="form-control" id="useremail" type="email" name="txtuseremail" title="Seu e-mail válido" placeholder="E-mail do usuário">
            </div>
            <div class="form-group">
                <!-- <input class="form-control" id="userprofile" type="text" name="txtuserprofile" title="Perfil: Estudante/Professor" placeholder="Perfil do usuário"> -->
                <select class="form-control" name="txtuserprofile" id="userprofile">
                                <option value="estudante">Estudante</option>
                                <option value="professor">Professor</option>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" id="userpassword" type="password" name="txtuserpassword" title="Minimo 6 e máximo 32 caracters" placeholder="Senha">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" id="ca" name="btncreateaccount" data-bs-hover-animate="shake" value="Criar Conta">
                <!-- <button class="btn btn-primary btn-block" id="ca" type="button" data-bs-hover-animate="shake">Create Account</button> -->
            </div>
            <a href="login.php" class="forgot">Desisti! Tire-me daqui.</a>
        </form>
    </div>

    <div class='container-fluid text-center'>
        <div class='row'>
            <div class='col-xs-6' id='about'>
                <h3>O que é a Plataforma Off-Campus?</h3>
                <br>
                <h4>A Plataforma Off-Campus é uma ferramenta de auxílio
                    e interação entre estudantes e professores, que visa
                    compartilhar o conhecimento e manter o estudante sempre 
                    conectado aos estudos, mesmo fora da escola.
                </h4>
            </div>
            <div class='col-xs-6'>
                <h3>Quem pode se beneficiar da Plataforma?</h3>
                <br>
                <h4>Todos estudantes e professores que desejam se manter 
                    engajados em promover o conhecimento, compartilhando idéias,
                    projetos e lançando novos desafios.
                </h4>
                <br>
                <h4><a href="features.php">Leia mais e conheça as ferramentas da Off-Campus.</a></h4>
            </div>
        </div>
    </div>

<?php
    //INCLUDING THE HTML_FOOTER
    include ('./features/HTML_FOOTER.php');
?>
