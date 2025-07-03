<?php
include "../src/controller/micro_controller/_noreferer.php";
include "../src/repositories/admin_repository.php";

function list_books()
{   

    
    $list = "";
    $books = show_books();
    foreach ($books as $key => $book) {
        $a_sup = "<a href='../src/controller/admin_controller.php?id=$book[0]'>Supprimer</a>";
        $a_mod = "<a href='./homepage.php?id=$book[0]'>Modifier</a>";
        
        $list .= "<div class='card'" . "style=width: 18rem;" . ">
                <div class='card-body text-center'" . ">
                    <h5 class=" . "card-title" . ">$book[4]</h5>
                    <h6 class=" . "'card-subtitle mb-2 text-body-secondary'" . ">$book[6]</h6>
                    <span> Auteur </span>
                    <span>$book[5]</span>
                    <br>
                    <a href=" . "#" . "class=" . "card-link" . "> " . $a_sup . "</a>
                    <a href=" . "#" . "class=" . "card-link" . "> ".  $a_mod . "</a>
                </div>";
        $list .= "</div>
            </div>";

    }
    return $list;
}


function list_writters()
{
    $option = "";
    $writters = show_writters();
    foreach ($writters as $writter) {
        $option .= "<option value=" . $writter[1] . ">". $writter[1] ."</option>" ;
    }
    $option .=  " </li>";
    return $option;
}
