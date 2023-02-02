<?php
    class Products{
    
        private $name;
        private $description;
        private $price;
        private $srp;
        

        function setName($name){
            $this -> name = $name;
        }

        function setDescription($description){
            $this -> description = $description;
        }

        function setPrice($price){
            $this -> price = $price;
        }

        function getName(){
            return $this -> name;
        }

        function getDescription(){
            return $this -> Descriptione;
        }
        
        function getPrice(){
            return $this -> Price;
        }

        function computeSRP(){
            return $this -> Price * 1.5;
        }
        
}
  
    
?>