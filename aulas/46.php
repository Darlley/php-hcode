<?php

    class Livro {
        protected $isbn = '8575223720';
        public $name = "JavaScrip Remoto";
        private $id_amazon = 'A1ZZFT5FULY4LN';

        public function mostrar_amazon(){
            echo $this->name . '<br>';
            echo $this->isbn . '<br>';
            echo $this->id_amazon . '<br>';
        }
    }


    class Kindle extends Livro{
        public function mostrar_shopping(){
            echo $this->name . '<br>';
            echo $this->isbn . '<br>';
            echo $this->id_amazon . '<br>';
        }
    }

    echo (new Livro())->mostrar_amazon() . '<br>';
    echo (new Kindle())->mostrar_shopping();