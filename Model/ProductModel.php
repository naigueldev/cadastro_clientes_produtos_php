<?php
    class ProductModel {
        private $descricao;
        private $cod_referencia;
        private $marca;

        // metodos para atribuir/buscar valores das propriedades
        public function __construct(){}

        public function __set($propriedade, $valor){
        	$this->$propriedade = $valor;
        }

        public function __get($propriedade){
        	return $this->$propriedade;
        }
    }

?>
