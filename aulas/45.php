<?php // teste de conhecimento até a aula 45

    class Pessoa {
        private $rg;
        private $cpf;

        public $nome;
        public $sexualidade;

        public function __construct( $rg, $cpf, $nome, $sexualidade ) {
            $this->rg = $rg;
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->sexualidade = $sexualidade;
        }

        public static function validar_cpf($cpf): bool{
            if($cpf == '06775682158'){
                return true;
            }

            return false;
        }
        public static function validar_rg($rg): bool{
            if($rg === '2213773'){
                return true;
            }

            return false;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getSexualidade(){
            return $this->sexualidade;
        }
        public function getRG(){
            return $this->rg;
        }
        public function getCPF(){
            return $this->cpf;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setsexualidade($sexualidade){
            $this->sexualidade = $sexualidade;
        }
        public function setRG($rg){
            $this->rg = $rg;
        }
        public function setCPF($cpf){
            $validado = Pessoa::validar_cpf($cpf);
            if($validado) {
                $this->cpf = $cpf;
            } else {
                echo 'CPF INVÀLIDO!';
            }

        }
    }

    $estudante = new Pessoa('223773', '000-000-000-00', 'Darlley Brito', 'masculino');

    var_dump($estudante);

    $estudante->setCPF('06775682158');
    echo $estudante->getCPF();