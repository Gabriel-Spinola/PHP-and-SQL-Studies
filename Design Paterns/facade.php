<?php

/**
 * a facade is an object that serves as a front-facing interface masking more complex underlying or structural code
*/

class Cart
{
    function closeCart() {
        echo 'cart closed';
    }
}

class Freight
{
    function freightCalc() {
        echo 'freight calculated';
    }
}

class Shop
{
    function closeRequest() {
        $this -> closeCart();
        // $this -> freightCalc();

        echo 'request closed';
    }

    function closeCart() {
        $cart = new Cart();
        $cart -> closeCart();
    }
};

$shop = new Shop();
$shop -> closeRequest();