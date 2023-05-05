<?php
    class Food extends Product{

        
        public $type;
        public $brand;

        public function __construct (string $image, string $name, float $price, string $category, string $type, string $brand)
        {
            parent::__construct($image, $name, $price, $category);
            $this -> type = $type;
            $this -> brand = $brand;
        }
    }

?>