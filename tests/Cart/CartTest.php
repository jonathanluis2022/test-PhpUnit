<?php
    namespace tests;
    
    use app\libraries\Product;
    use app\exceptions\CartQuantityException;
    use app\libraries\Cart;
    use PHPUnit\Framework\TestCase;

    class CartTest extends TestCase
    {
        public function test_car_is_empty()
        {
            $cart = new Cart;
            //assertEmpty(si esta vazio ou nao , si o getCart estiver vazio, teste passa)
            $this->assertEmpty($cart->getCart()); //getCart metodo da class Cart
        }

        public function test_car_is_not_empty()
        {
            $cart = new Cart;
            $cart->add(new Product);

            $this->assertNotEmpty($cart->getCart());
        }

        public function test_exeception()
        {
            $this->expectException(CartQuantityException::class);

            $product1 = new Product;
            $product2 = new Product;
            $product3 = new Product;

            $cart = new Cart;
            $cart->add($product1);
            $cart->add($product2);
            $cart->add($product3);

            // $this->assertNotEmpty($cart->getCart());
        }
    }