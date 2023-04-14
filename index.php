<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once ("supplies.php");

    $supplies1 = new Supplies(1);
    $supplies1->setName("Product 1");
    $supplies1->setPrice(40);

    $supplies2 = new Supplies(2);
    $supplies2->setName("Product 2");
    $supplies2->setPrice(250);

    $supplies3 = new Supplies(3);
    $supplies3->setName("Product 3");
    $supplies3->setPrice(333);

    $supplies4 = new Supplies(4);
    $supplies4->setName("Product 4");
    $supplies4->setPrice("not a number");

    $suppliesList = array($supplies1, $supplies2, $supplies3, $supplies4);

    foreach ($suppliesList as $supplies) {
    echo "<div>";
    echo "<h3>Product " . $supplies->getId() . "</h3>";
    echo "<p>Name: " . $supplies->getName() . "</p>";
    echo "<p>Price: " . $supplies->getPrice() . "</p>";
    echo "</div>";
    }
    ?>
</body>
</html>