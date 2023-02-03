<?php
    require_once "Medicine.php";
    require_once "product.php";

    Class Cart extends Medicine{
        private $cartItems = array();

        function addToCart ($Item){
            $this -> cartItems[] = $Item;
        }

        function viewCart(){
            $arrCartItems = $this -> cartItems;
            
            foreach ($arrCartItems as $key => $Item){
                echo
                '
                <ul>
                    <li> <b> Name: </b>'. $Item -> getName().'
                    </li><b> Description:</b> ' .$Item -> getDescription().'
                    <li><b> Price: ₱ </b>' .$Item -> getPrice().'
                    </li><b> Dose: </b>' .$Item -> getDose(). '
                    <li><b> Type: </b>' .$Item -> getType(). '
                    </li><b> Expiration Date: </b>' .$Item -> getExpirationDate().'
                    <li><b> SRP : </b>' .$Item -> computeSRP(). '
                    </li>
                </ul>
                <hr>';
            }

        }
        function computeTotal(){
            $total = 0;
            foreach( $this -> cartItems as $key => $Item){
                $total += $Item -> computeSRP();
            }

            echo '<b> Total Cart Amount: </b> ₱' . number_format($total,2);
        }

    }
?>
