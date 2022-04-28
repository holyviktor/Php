<?php
include_once "../Classes/inheritance.php";

function addToBasket(){
    if (isset($_GET["id"])){
        if (isset($_COOKIE['id'])) {
            setcookie("id", $_COOKIE['id'].",".$_GET["id"], time() + (86400 * 2));
        }else{
            setcookie("id", $_GET["id"]);
        }
    }
}

function getItem($id){
    $toast = factory("Тост", 50, ['хрусткий тост', 'лосось', 'вершковий сир', 'авокадо', 'яйце пашот'],
        200, "View/media/menu/toast.png");
    $dishes = ['3'=>$toast];
    return $dishes[$id];
}

