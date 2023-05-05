<?php
    class Product{
        public $image;
        public $name;
        public $price;
        public $category;

        public function __construct (string $image, string $name, float $price, string $category)
        {
            $this -> image = $image;
            $this -> name = $name;
            $this -> price = $price;
            $this -> category = $category;
        }

    }

?>