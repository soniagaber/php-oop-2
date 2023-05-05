<?php
    trait Measurable {
        protected $format;

        public function setFormat(float $format){
            if($format>0 && $format <=300){
                $this->format=$format;
            } else{
                throw new Exception("ATTENZIONE! Il valore `{$format}` non è valido. Le misure dei giochi e delle cucce devono essere comprese tra 0 e 300cm.   .");
            }
        }
        public function getFormat(){
            return $this->format;
        }
    }
?>