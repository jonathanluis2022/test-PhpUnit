<?php
    namespace app\libraries;

    use app\exceptions\CartQuantityException;

    class Cart
     {

        private array $products = []; //iniciado um array vazio

        public function add(Product $product) 
        {
            if(count($this->products) === 2){
                throw new CartQuantityException('Cart no maximo 2 itens ');
            }

            $this->products[] = $product ; // aray vai receber os produtos
        }

        public function getCart() 
        {
            return $this->products; //get para mostrar os produtos que estao la dentro 
        }
    }