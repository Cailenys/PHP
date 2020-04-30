<?php

if(isset($_GET ['as'], $GET['item'])){
    $as = $_GET['as'];
    $item =  $_GET['item'];
    /*switch ($as){
        case 'done' :
            UPDATE items
            SET done =1
            where id = : item
        break;
    }*/
}

header ('Location : index.php');