<?php
    require_once "Medicine.php";
    require_once "product.php";

    Class Cart extends Medicine{
        private $cartItems = array();

        function addToCart ($Item){
            $this -> cartItems[] = $Item;
        }

        function viewCart(){
            $arrcartItems = $this -> cartItem;
            
            foreach ($arrcartItems as $key => $Item){
                echo
                '
                <ul>
                    <li> Name:'. $Item -> getName().'
                    </li> Description:' .$Item -> getDescription().'
                    <li> Price: ₱' .$Item -> getPrice().'
                    </li> Dose: ' .$Item -> getDose(). '
                    <li> Type: ' .$Item -> getType(). '
                    </li> Expiration Date: ' .$Item -> getExpirationDate().'
                    <li> SRP : ' .$Item -> computeSRP(). '
                    </li>
                </ul>
                <hr>';
            }

        }
        function computeTotal(){
            $total = 0;
            foreach( $this -> cartItems as key => $Item){
                $total += $Item -> computeSRP();
            }

            echo '<b> Total Cart Amount: </b> ₱' . number_format($total,2);
        }

    }
?>
