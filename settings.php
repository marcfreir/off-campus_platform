<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 09-Feb-2019, 04:24:10 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<!-- INCLUDING THE HTML MAIN FEATURES -->
<?php
//INCLUDING THE HTML_HEAD_p1
include ('./features/HTML_HEAD_part1.php');
?>
<title>Settings</title>
<?php
//INCLUDING THE HTML_HEAD_p2
include ('./features/HTML_HEAD_part2.php');
?>

<!-- The complement of the code for HTML_HEAD_part2.php -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style_settings.css' />
    <script src='./js/index.js'></script>
</head>

<?php
//INCLUDING THE HTML_BODY_p1_V4
include ('./features/HTML_BODY_part1_V4.php');
?>
<?php
//INCLUDING THE HTML_BODY_p2_V4
include ('./features/HTML_BODY_part2_V4.php');
?>

    <div class="form-clean">
        <form method="post">
            <div class="illustration">
                <i class="logo">
                    <img src="./images/login-off-c.png" alt="" id="logo-off">
                </i>
            </div>
            <div class="illustration">
                <h2 class="box-title">Configurações</h2>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" formaction="profile.php" id="ca" name="btnprofile" data-bs-hover-animate="shake" value="Editar Perfil">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" formaction="change-password.php" id="ca" name="btnsetnewpassword" data-bs-hover-animate="shake" value="Mudar Senha">
            </div>
            <div class="form-group">
                <hr>
                <h2 class="danger-title">Área Perigosa</h2>
                <hr>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" formaction="delete-account-request.php" id="dg" name="btndeleteaccount" data-bs-hover-animate="shake" value="Excluir Conta">
            </div>
            <a href="index.php" class="forgot">Desisti! Tire-me daqui.</a>
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
