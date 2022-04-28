<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Content/View/styles/bootstrap-grid.css">
    <title>OOP</title>
</head>
<body>
<?php
include_once "inheritance.php";
include_once "singleton.php";
?>

<h1>Наслідування</h1>
<?php
$cake = factory("Торт", 50.5, ['борошно', 'яйця', 'крем', 'молоко'], 200, "View/media/menu/cake.png");
$croissant = factory("Круасан", 50.5, ['круасан', 'шинка', 'соус', 'помідор'], 300, "View/media/menu/Croissant.png", 20, '24.05.2022');
print_r($cake->printDish());
echo "<br>". $croissant->printDish();
?>
<h1>Singleton</h1>
<?php
$Object1 = Singleton::getInstance();
$Object2 = Singleton::getInstance();
$Object1->setId(5);
$Object2->setId(7);
if ($Object1 === $Object2) {
    echo "Існує лише один об'єкт";
} else {
    echo "Існують два об'єкти";
}
echo "<br>";

echo "Id1 " .$Object1->getId()."<br>";

echo "Id2 " .$Object2->getId();