<?php

    require_once __DIR__ . "/../Traits/Measurable.php";
    class Toy extends Product{
        public $type;
        public $material;
        use Measurable;

        public function __construct (string $image, string $name, float $price, string $category, string $type, string $material, float $format)
        {
            parent::__construct($image, $name, $price, $category);
            $this -> type = $type;
            $this -> material = $material;
            $this -> format = $format;
        }

    }
