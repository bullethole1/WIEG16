<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php

class Product
{
    public $name;
    public $description;
    public $price;
    public $imgURL;
    public $quantity;
    public static $webShopName = "Shoppen";

    public function __construct($name, $description, $price=100, $imageURL = '', $quantity=5)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->imgURL = $imageURL;
        $this->quantity = $quantity;
    }

    public function printProduct()
    {
        echo "Produkt namn: $this->name <br>" .
            "Beskrivning: $this->description <br>" .
            "Price: $this->price <br>" .
            "ImageURL: $this->imgURL <br>" .
            "Quantity: $this->quantity <br>" .
            "Säljs i: " . Product::$webShopName . "<br>";
    }

    public function getName(){
        return $this->name;
    }
    public function setName($newName){
        $this->name = $newName;
    }

}


$item = new Product('lakrits', 'ååååååhhhhhh', 25, './img/lakrits.png', 2500);
echo $item->printProduct();
$item->setName('sötpotstis');
echo "new produckt" . $item->getName() . "<br>";

$item2 = new Product('rubberduck','bra på programmering');
$item2->printProduct();

?>
</body>
</html>