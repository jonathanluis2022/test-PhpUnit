<?php

    namespace app\libraries;

    class Product {

        private string $name ;

        public function setName(sting $name)
        {
            $this->name = $name ;
        }

        public function getName()
        {
            return $this->name ;
        }
    }