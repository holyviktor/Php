<?php
function order_date(){
    if (file_exists('order_details.json')) {
        $json = file_get_contents('order_details.json');
        $jsonArray = json_decode($json, true);
    }

    if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["street"]) &&
        isset($_POST["house"]) && isset($_POST["flat"]) && isset($_POST["comment"])) {
        if (trim($_POST["name"]) && trim($_POST["phone"]) && trim($_POST["street"]) && trim($_POST["house"]) && trim($_POST["flat"])) {
            $jsonArray[] = array("name" => $_POST["name"], "phone" => $_POST["phone"], "street" => $_POST["street"],
                "house" => $_POST["house"], "flat" => $_POST["flat"], "comment" => $_POST["comment"]);
            file_put_contents('order_details.json', json_encode($jsonArray, JSON_FORCE_OBJECT));
            return true;
        }else{
            return false;
        }

    }
    return null;
}
?>
