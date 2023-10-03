<?php

class Product{
    private $id;
    private $price;
    private $name;

    public function __construct($id, $name, $price){
        $this->id = $id;
        $this->name =$name;
        $this->price =$price;
    }
    //formatted the price
    function formattedPrice(){
        return "$" . number_format($this->price, 2 );
}

//Show product Details

public function showProductDetails(){
        echo "ID: $this->id " . "<br/>";
        echo "Name: $this->name " . "<br/>";
        echo "Price: " . $this-> formattedPrice() ;

}
}

$product = new Product(1, "T-shirt", 19.99);
$product->showProductDetails();