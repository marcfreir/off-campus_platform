<?php
/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 21-Feb-2019, 01:36:01 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/
?>

<?php
    if (isset($_POST['btnsearch']))
    {
        $tosearch = explode(" ", $_POST['searchbox']);
        if (count($tosearch) == 1)
        {
            $tosearch = str_split($tosearch[0], 2);
        }
        $whereclause = "";
        $paramsarray = array(':username'=>'%'.$_POST['searchbox'].'%');
        for ($i = 0; $i < count($tosearch); $i++)
        {
            $whereclause .= " OR username LIKE :u$i ";
            $paramsarray[":u$i"] = $tosearch[$i];
        }
        $users = DB::query('SELECT tb_users.username FROM tb_users WHERE tb_users.username LIKE :username '.$whereclause.'', $paramsarray);
        //print_r ($users);
        //for printing the users

        echo "
            <div class='container' id='searchresults'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='timelineposts'>
                            <blockquote>
                                ";
        
        foreach ($users as $user_search)
        {
            //echo '<h4 class="fa fa-user-circle-o"> User: </h4>'.'@'.$user_search['username'].'<hr />';
            
            echo '<div class="container">'.
                '<h4><span class="fa fa-user-circle-o"></span> User: '.' ~ <a href="profile.php?username='.$user_search["username"].'">@'.$user_search["username"].'</a></h4>'.
                '</div>'.'<hr />';
        }
        

        $whereclause = "";
        $paramsarray = array(':body'=>'%'.$_POST['searchbox'].'%');
        for ($i = 0; $i < count($tosearch); $i++)
        {
            if ($i % 2)
            {
                $whereclause .= " OR posts_body LIKE :p$i ";
                $paramsarray[":p$i"] = $tosearch[$i];
            }
        }
        $posts = DB::query('SELECT tb_posts.posts_body FROM tb_posts WHERE tb_posts.posts_body LIKE :body '.$whereclause.'', $paramsarray);
        //echo '<pre>';
        //print_r ($posts);
        //echo '</pre>';
        //for printing the posts
        foreach ($posts as $postuser)
        {
            echo '<div class="container">'.
                    '<h6><span class="fa fa-comment"></span> Post: '.'>>'.$postuser['posts_body'].'</h6>'.
                '</div>'.'<hr />';
        }
        echo '<div class="container">
                <form action="index.php">
                    <h5 id="nomorerecords">Não há mais registros!</h5>
                    <!-- <button class="btn btn-default btn-block" id="clearsearch" type="submit" formaction="index.php" data-bs-hover-animate="shake">Limpar</button> -->
                    <input type="submit" class="btn btn-default btn-block" id="btnclearsearch" name="btnclear" value="Limpar">
                </form>
            </div>
            <hr />';
        
        echo "
        </blockquote>
        </div>
            </div>
            </div>
            </div>";
    }

?>