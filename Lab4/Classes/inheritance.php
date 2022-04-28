
<?php
class Dish{
    private $name;
    private $price;
    private $ingredients;
    private $weight;
    private $img;

    public function __construct($name, $price, $ingredients, $weight, $img){
        $this->name = $name;
        $this->price = $price;
        $this->ingredients = $ingredients;
        $this->weight = $weight;
        $this->img = $img;
    }

//    public function __destruct() {
//        print "<br>". "Деструктор". ' ' . __CLASS__ ;
//    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getIngredients(){
        return $this->ingredients;
    }
    public function getWeight(){
        return $this->weight;
    }
    public function printDish(){
        $all_ingredients = implode(', ', $this->ingredients);
        return "$this->name, ціна: $this->price грн, вага: $this->weight, інгредієнти: $all_ingredients";
    }
}

class Dish_of_the_day extends Dish{
    private $sale;
    private $day;
    private $new_price;

    public function __construct($name, $price, $ingredients, $weight, $img, $sale, $day){
        parent::__construct($name, $price, $ingredients, $weight, $img);
        $this->sale = $sale;
        $this->day = $day;
        $this->new_price = $this->count_new_price();
    }
    public function setSale($sale)
    {
        $this->sale = $sale;
    }
    public function setDay($day)
    {
        $this->day = $day;
    }

//    public function __destruct() {
//        print "<br>". "Деструктор". ' ' . __CLASS__;
//    }
    public function getSale(){
        return $this->sale;
    }
    public function getDay(){
        return $this->day;
    }
    public function count_new_price(){
        return $this->getPrice() - $this->getPrice() * ($this->getSale()/100);
    }
    public function printDish(){
        return parent::printDish().", дата: $this->day, знижка: $this->sale%, ціна зі знижкою: $this->new_price грн";
    }
}

function factory($name, $price, $ingredients, $weight, $img, $sale=null, $day=null){
    if ($sale && $day){
        return new Dish_of_the_day($name, $price, $ingredients, $weight, $img, $sale, $day);
    }
    return new Dish($name, $price, $ingredients, $weight, $img);
}


