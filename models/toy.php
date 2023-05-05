<?php
    class Toy extends Product{
        public $type;
        public $material;

        public function __construct (string $image, string $name, float $price, string $category, string $type, string $material)
        {
            parent::__construct($image, $name, $price, $category);
            $this -> type = $type;
            $this -> material = $material;
        }

    }

?>