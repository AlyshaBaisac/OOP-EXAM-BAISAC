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
            resturn $this -> name;
        }

        function getDescription(){
            resturn $this -> Descriptione;
        }
        
        function getPrice(){
            resturn $this -> Price;
        }

        function computeSRP(){
            resturn $this -> Price * 1.5;
        }
        
}
  
    
?>