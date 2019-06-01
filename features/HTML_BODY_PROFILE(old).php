<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 11-Feb-2019, 08:41:04 AM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/
?>

<!-- NEWSFEED DIV -->
    <!-- REMOVE FOR A WHILE - BEGINNING
    <form action="profile.php?username=</*?php echo $username; ?*/>" method="post" class="ajax" id="content">
        <textarea name="postbody" rows="8" cols="80"></textarea> -->
        <!-- <input type="submit" name="post" value="Post"> -->
        <!-- <button type="submit" name="post">Postc</button>
    </form>
    REMOVE FOR A WHILE - END -->
    <!-- REPLACEMENT TEST -->
    <!-- COLLAPSIBLE COMMENT - BEGINNING -->

    <div class="container">
        <div class="text-center">
            <hr class="horizontal-rule">
            <h1 class="profile-text">Perfil - @<?php echo $user; ?></h1>
            <hr class="horizontal-rule">
        </div>
        <form action="./controllers/ControllerRegisterProfile.php" class="" method="post">  
            <div class="form-row">
                <div class="form-group col-md-6">
                    <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
                    <label>Nome </label>
                    <input type="text" name="txtusername" class="form-control" id="username" maxlength="80" placeholder="Nome completo">
                </div>
                <div class="form-group col-md-6">
                    <label>E-mail </label>
                    <input type="email" name="txtstudentemail" class="form-control" id="studentemail" maxlength="60" placeholder="Ex.: seunome@dominio.com">
                </div>
                <div class="form-group col-md-6">
                    <label>CPF </label>
                    <input type="text" name="txtstudentdocument_1" class="form-control" id="studentdocument_1" maxlength="11" placeholder="Apenas números - ex.: 00000000000">
                </div>
                <div class="form-group col-md-6">
                    <label>RG </label>
                    <input type="text" name="txtstudentdocument_2" class="form-control" id="studentdocument_2" maxlength="32" placeholder="Apenas números - ex.: 00000000000">
                </div>
                <div class="form-group col-md-6">
                    <!-- <span class="input-group-addon"><i class="fa fa-at"></i></span> -->
                    <label>Data de Nascimento </label>
                    <input type="date" name="txtuseremail" class="form-control" id="date">
                </div>
                <div class="form-group col-md-6">
                    <!-- <span class="input-group-addon"><i class="fa fa-address-card"></i></span> -->
                        <!-- <input type="text" name="txtuserprofile" class="form-control" id="userprofile" maxlength="10" placeholder="Profile (Perfil)"> -->
                    <label>Sexo </label>
                    <select class="form-control" name="txtusersex" id="usersex">
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <!-- <span class="input-group-addon"><i class="fa fa-coffee"></i></span> -->
                    <label>Matricula </label>
                    <input type="text" name="txtusercod" class="form-control" id="userlogin" maxlength="32" placeholder="Código da Matricula">
                </div>
                <div class="form-group col-md-6">
                    <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
                    <label>Programa de Curso </label>
                    <input type="text" name="txtprogramcourse" class="form-control" id="studentprogramcourse" maxlength="60" placeholder="Ex.: Computação">
                </div>
                <div class="form-group col-md-6">
                    <label>Tipo de Estudante </label>
                    <select class="form-control" name="txtstudenttype" id="studenttype">
                        <option value="online">Online</option>
                        <option value="presencial">Presencial</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Data de Entrada </label>
                    <input type="date" name="txtentrydate" class="form-control" id="entrydate">
                </div>
                <div class="form-group col-md-6">
                    <label>Situação </label>
                    <select class="form-control" name="txtsituation" id="studentsituation">
                        <option value="em_andamento">Em Andamento</option>
                        <option value="pausado">Pausado</option>
                        <option value="concluido">Concluído</option>
                    </select>
                </div>
            </div>
               
            <div class="form-group col-md-6">
                <input type="submit" id="submit" name="btnsalvar" class="btn btn-default btn-block" value="Salvar">
            </div>
                
            <!-- <h6>*Some message here - whatever</h6> -->
            
        </form>
    </div>
<!-- FINISHING THE HTML_BODY_part2_V3.php -->
</body>
</html>