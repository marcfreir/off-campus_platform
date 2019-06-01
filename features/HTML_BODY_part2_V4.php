<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 27-Feb-2019, 10:03:07 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/

//FOR MOST OF THE PAGES

?>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">&#x1F310; Meu <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php">&#x1F3DB; Home <span class="sr-only">(current)</span></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="profile.php">&#x1F47E; Perfil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="resume.php">&#x1F4DD; Currículo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">&#x1F3EB; Sala <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="library.php">&#x1F4DA; Acervo</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="contents.php">&#x1F5C2; Conteudos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="followers.php">&#x1F32C; Seguidores</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="topics.php">&#x1F4CC; Tópicos</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">&#x1F6E0; Ferramentas <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="help-loggedin.php">&#x1F52E; Ajuda</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="settings.php">&#x2699; Configurações</a></li>
                            </ul>
                        </li>
                        <li><a href="notify.php">&#x1F514; Notificações <span class="badge badge-light">4</span></a></li>
                        <li>
                            <form action="index.php" method="post" class="navbar-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="searchbox" title="Ex. Um o nome de um usuário" placeholder="Busca Geral">
                                </div>
                                <button type="submit" class="btn btn-default" name="btnsearch" id="searchitems">Buscar &#x1F50E;</button>
                            </form>
                        </li>
                        <li><a href="logout.php">&#x1F6AA; Sign Out</a></li>
                    </ul>
                    <!--
                    <ul class="nav navbar-nav navbar-right">
                    
                    <ul class="nav navbar-nav navbar-right">
                    -->
                    <!--
                        <li><a href="./controllers/ControllerLogout.php?link=logout">Sign Out</a></li>
                    -->
                        <!-- [START] Let's just comment this part - maybe in the future for another implementation
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        [END]-->
                    <!--
                    </ul>
                    -->
                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

<?php
    //INCLUDING THE Controller SearchNavbar
    include ('./controllers/ControllerSearchNavbar.php');
?>