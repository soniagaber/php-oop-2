<?php
    require_once __DIR__ . "/../Traits/Measurable.php";
    class Bed extends Product{

        
        public $shape;
        public $color;
        public $material;
        use Measurable;

        public function __construct (string $image, string $name, float $price, string $category, string $shape, string $color, string $material, float $format)
        {
            parent::__construct($image, $name, $price, $category);
            $this -> shape = $shape;
            $this -> color = $color;
            $this -> material = $material;
            $this -> format = $format;
        }


    }

?>