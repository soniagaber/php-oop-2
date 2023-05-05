<?php
    class Bed extends Product{
        public $shape;
        public $color;
        public $material;

        public function __construct (string $image, string $name, float $price, string $category, string $shape, string $color, string $material)
        {
            parent::__construct($image, $name, $price, $category);
            $this -> shape = $shape;
            $this -> color = $color;
            $this -> material = $material;
        }


    }

?>