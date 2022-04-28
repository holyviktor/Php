<!DOCTYPE html>
<html lang="en">
<?php
include_once "Model/form_post.php";
include_once "Elements/head.php";
include_once "Model/cookies.php";
addToBasket();
?>

<body>
    <?php
        $page = null;
        $is_success = order_date();
        $pages = ['landing', 'about', 'basket', 'menu', 'item', 'ordering'];
        $error = null;
        if(isset($is_success) && $is_success){
            include_once "Elements/message.php";
            $page = 'basket';
        }else if(isset($is_success)){
            $page = 'basket';
            $ordering = 'ordering';
            $error = "Поля введені некоректно!";
        }
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        include_once "Elements/header.php";
        if (!$page)
            include_once "Pages/landing.php";
        elseif (!in_array($page, $pages))
            echo "Сторінки не існує!";
        else include_once "Pages/$page.php";
    ?>
    <?php include_once "Elements/footer.php" ?>
</body>
</html>