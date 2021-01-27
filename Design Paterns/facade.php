<?php

    // Exemplo de loja virtual.
    // Em que cada ação tem sua classe.

    // adicionar - carrinho - fechar carrinho.
    // pedido - fechar pedido.

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

?>