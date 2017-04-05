<?php

/**
 * Created by PhpStorm.
 * User: johanlund
 * Date: 2017-03-29
 * Time: 12:58
 */
/*class Book
{
    public $title;
    public $author;

    public function printTitle()
    {
        echo "Titel: $this->title";
    }
}

$book = new Book();

$book->title = 'The Dark forest';
$book->author = 'Liu Cixin';
$book->author = 'Harry Potter and the Order of the Phoenix';
$book->printTitle();*/

/*class Car
{
    public $model;
    public $car;
    public $price;

    public function printInfo()
    {
        echo "Det är en röd: $this->model <br> Model: $this->car <br> med pris: $this->price <br>";
    }

    public function halfPrice()
    {
        echo "bilens halva pris är: " . $this->price / 2;
    }
}

$carInfo = new Car();
$carInfo->model = 'TT';
$carInfo->car = 'Audi';
$carInfo->price = 12000;
$carInfo->printInfo();
$carInfo->halfPrice();*/

/*class SingleBookLibrary
{
    public $book;
    public $isBorrowed;

    public function borrow()
    {
        if ($this->isBorrowed) {
            echo "Boken är utlånad <br>";
        } else {
            echo "boken finns <br>";
        }
        $this->isBorrowed = true;
    }
}

$library = new SingleBookLibrary();
$library->isBorrowed = false;
$library->book = new Book('Jurassic Park', 'Michael Crichton');
$library->borrow();
$library->borrow();
$library->borrow();*/

class PancakeRecipe {


    public $flour;
    public $milk;
    public $egg;
    public $butter;
    public $salt;



    public function canMakeSinglePancake(){

        if (){
         return true;
        }
        return false;
    }

}

