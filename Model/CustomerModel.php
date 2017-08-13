<?php
    class CustomerModel {
        private $nome_completo;
        private $nascimento;
        private $cpf;
        private $sexo;
        private $profissao;
        private $telefone;
        private $celular;
        private $email;
        private $cep;
        private $endereco;
        private $numero;
        private $complemento;
        private $bairro;
        private $cidade;
        private $estado;
        private $observacao;

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
