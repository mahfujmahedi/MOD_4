<?php

class Product {
    
    public $id;

    public $name;

    public $price;


    
    public function __construct($id, $name, $price) {

        $this->id = $id;
        $this->name = $name;
        $this->price = $price;

    }


    // TODO: Add getFormattedPrice method

    public function getFormattedPrice() {

        $FormattedNumber = number_format($this->price, 2, '.', ',');

        $this->price = "$$FormattedNumber";

        return $this->price;

    }


    public function showDetails() {

        $this->getFormattedPrice();

        echo "Product Details: \n- ID: $this->id \n- Name: $this->name \n- Price: $this->price";

    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();


?>