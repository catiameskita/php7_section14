<?php

if(!mkdir("images")) mkdir("images") ;

foreach (scandir("images")as $item){

    if(!in_array($item, array(".",".."))){

        unlink("images/" .$item);

    }
}

Echo "OK";

?>