<?php
class Supplies {
private $name;
private $price;
private $id;
const SALE = 10;

public function __construct($id) {
$this->id = $id;
}

public function getId() {
return $this->id;
}

public function getName() {
return $this->name;
}

public function setName($name) {
$this->name = $name;
}

public function getPrice() {
return $this->price . " руб.";
}

public function setPrice($price) {
if (is_numeric($price) && $price >= 0) {
$this->price = $this->countDiscountPrice($price);
} else {
$this->price = $this->countDiscountPrice(0);
}
}

private function countDiscountPrice($price) {
$discount = $price * self::SALE / 100;
return $price - $discount;
}
}
?>
