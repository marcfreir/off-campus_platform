<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 10-Mar-2019, 06:12:28 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

        <!-- Content -->
        <div class="container" id="card-contents-first">
            <div class="card" id="cardcont">
                <hr>
                <h2 class="text-center">&#x1F5C2;</h2>
                <p class="text-center">Essa e a pagina de conteudos. Você pode criar Artigos e Postagens e Publica-las.</p>
                <p class="text-center">*Os artigos podem ter recomendações, baseado no conteudo e no proposito de cada um.</p>
                <hr>
                <br>
                <form action="./topics.php" method="post" class="form-center">
                    <!-- There is bug -- if just type the number 0 (Try fixing with the attributes minlength="3" maxlength="32") -->
                    <input type="search" id="txtkeyword" name="txtkeyword" title="Digite uma palavra para procurar posts relacionados." minlength="3" maxlength="32" placeholder="Artigos/Postagens">
                    <button class="btn btn-default" type="submit" name="btnsearchtopic" title="Deixe a caixa de texto vazia, caso deseje buscar todos os tópicos.">Buscar &#x1F50E;</button>
                </form>
            </div>
        </div>

        <div class="container" id="card-contents-second">
            <div class="card" id="cardcont">
                <hr>
                <p class="text-center">Escolha um dos modelos abaixo para criar um novo artigo/post:</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-body">
                            <h4>Modelo 1</h4>
                            <hr>
                            <blockquote class="model1">
                                <p>Esse modelo possue <a>3 seções</a> com valor maximo de <a>500</a> caracteres por seção.</p>
                            </blockquote>
                            <form action="" method="post">
                                <button type="button" class="btn btn-default" id="model1" name="btnmodel1" data-toggle="modal" data-target="#model-modal" title="Escolha este para artigos/postagens mais simples.">Modelo 1 &#x02712;</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-body">
                            <h4>Modelo2</h4>
                            <hr>
                            <blockquote class="model2">
                                <p>Esse modelo possue <a>5 seções</a> com valor maximo de <a>800</a> caracteres por seção.</p>
                            </blockquote>
                            <form action="" method="post">
                                <button type="button" class="btn btn-default" id="model2" name="btnmodel2" data-toggle="modal" data-target="#model-modal" title="Escolha este para artigos/postagens maiores.">Modelo 2 &#x02712;</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!--
                <p class="message-keyword">Essa e a pagina de conteudos. Você pode criar Artigos e Postagens e Publica-las.</p>
                <p class="message-keyword">*Os artigos podem ter recomendações, baseado no conteudo e no proposito de cada um.</p>
                <hr>
                <br>
                <form action="./topics.php" method="post" class="form-center"> -->
                    <!-- There is bug -- if just type the number 0 (Try fixing with the attributes minlength="3" maxlength="32") -->
                    <!--<input type="search" id="txtkeyword" name="txtkeyword" title="Digite uma palavra para procurar posts relacionados." minlength="3" maxlength="32" placeholder="Artigos/Postagens">
                    <button class="btn btn-default" type="submit" name="btnsearchtopic" title="Deixe a caixa de texto vazia, caso deseje buscar todos os tópicos.">Buscar</button>
                </form>-->
            </div>
        </div>

<!--
        <div class="container">
            <div class="message-topics">
                <div class="text-center">
                    <div class="text-top-topics">
                    <br><hr><br>
                        <h4>Veja os tópicos que foram encontrados:</h4>
                        <p class="text-topic"><?php //echo printPostTopic($posts); //printPostTopic($post['posts_body']); echo "<br>"; ?></p>
                        <br><hr><br>
                    </div>
                    <form action="./profile.php" method="post">
                        <input class="btn btn-default" type="submit" name="btnreturn" value="Voltar" id="return">
                    </form>
                </div>
            </div>
        </div>
-->