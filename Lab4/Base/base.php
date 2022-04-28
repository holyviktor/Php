<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Content/View/styles/bootstrap-grid.css">
    <title>Base</title>
</head>
<body>
    <?php
    $nameDish = 'Cake';
    $weight = 200;
    $ingredients = ['flour', 'eggs', 'cream', 'milk'];
    $price = 50.5;
    $image = 'img/Cake.png';
    $delicious = True;
    $number= '200';
    $variable = 'nameDish';
    $ordering = null;
    $str = "Hello all world";
    ?>
    <div class="container">
        <h1>Базовий синтаксис</h1>
        <h2>Розіменування</h2>
        <p>
        <?= $$variable;?>
        </p>

        <section>
            <h2>Конкатенація та додавання</h2>
            <p> <?= $weight + $number?></p>
            <p> <?= $weight . $nameDish?></p>
        </section>

        <h2>Робота зі строками</h2>
        <?php
            echo "$number<br>";
            echo '$number<br>';
            echo "$str<br>";
            echo "Довжина: ".strlen($str). " символів<br>";
            echo "Кількість слів: ".str_word_count($str)."<br>";
            echo "Кількість літер l: ".substr_count($str, 'l')."<br>";
            echo "Видалення підстроки all: ".str_replace('all ', '', $str);
        ?>
        <section>
        <h2>Приведення типів</h2>
            <?php
            $n = '100';
            $n /= 2;
            echo "<p>$n</p>";
            $n = $n * 1.555;
            echo "<p>$n</p>";
            $n = 5 * "5 text";
            echo "<p>$n</p>";
            ?>
            <p><?=(bool)$n?></p>
        </section>
        <section>
            <h2>Хеш-масиви</h2>
            <?php
            $people_order= array(
                'Vasya' => 'Cake',
                'Petya' => null,
                'Kolya' => 6.8,
                "Vitya" => 0,
            );
            print_r($people_order);
            echo "<br>";
            unset($people_order["Vitya"]);
            foreach ($people_order as $people=>$order){
                echo $people. ' ';
                echo $order.' ';
            }
            ?>
        </section>
        <section>
            <h2>Функції explode() та implode()</h2>
            <?php
            $directory = 'media/img/icons';
            $folders = explode('/', $directory);
            foreach ($folders as $row) {
                echo $row . "<br>";
            }

            $dishes = ["cake", "toast", "pizza", "coffee"];
            $order = implode(', ', $dishes);
            echo $order;
            ?>
        </section>

        <section>
            <h2>Порівняння</h2>
            <?php
            if ($weight == $number):
                echo "<p>200 == '200'</p>";
            endif;
            if ($weight !== $number){
                echo "200 !== '200'";
            }
            if ($price){
                echo "<p>$price != 0</p>";
            }
            echo ($delicious) ? "Їжа смачна" : "Їжа не смачна!";
            ?>
        </section>
        <section>
        <h2>Цикли</h2>
            <?php
            foreach ($ingredients as $ingredient){
                echo $ingredient.' ';
            }
            echo "<br>";
            for($i=0; $i<count($ingredients); $i++){
                echo $ingredients[$i].' ';
            }
            echo "<br>";
            $i = 0;
            while($i<count($ingredients)){
                echo $ingredients[$i].' ';
                $i++;
            }
            echo "<br>";
            $i = 0;
            do{
                echo $ingredients[$i].' ';
            }while($i++ < count($ingredients));
            ?>
        </section>
    </div>
</body>
</html>

