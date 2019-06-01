<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 24-Feb-2019, 10:59:27 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

        <!--User Information -->
        <div class="container" id="topics">
            <div class="card" id="cardtop">
                <hr>
                <h2 class="text-center">&#x1F4CC;</h2>
                <p class="message-keyword">Insira uma <i class="text-topic">keyword</i> para buscar algum tópico mensionado na plataforma Off-Campus.</p>
                <hr>
                <br>
                <form action="./topics.php" method="post" class="form-center">
                    <!-- There is bug -- if just type the number 0 (Try fixing with the attributes minlength="3" maxlength="32") -->
                    <input type="search" id="txtkeyword" name="txtkeyword" title="Digite uma palavra para procurar posts relacionados." minlength="3" maxlength="32" placeholder="Keyword">
                    <button class="btn btn-default" type="submit" name="btnsearchtopic" title="Deixe a caixa de texto vazia, caso deseje buscar todos os tópicos.">Buscar Tópico &#x1F50E;</button>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="message-topics">
                <div class="text-center">
                    <div class="text-top-topics">
                    <br><hr><br>
                        <h4>Veja os tópicos que foram encontrados:</h4>
                        <p class="text-topic"><?php echo printPostTopic($posts); //printPostTopic($post['posts_body']); echo "<br>"; ?></p>
                        <br><hr><br>
                    </div>
                    <form action="./profile.php" method="post">
                        <input class="btn btn-default" type="submit" name="btnreturn" value="Voltar" id="return">
                    </form>
                </div>
            </div>
        </div>