<?php

class Carro {
    private string $modelo;
    private float $motor;
    private int $ano;

    // getters
    public function getModelo(){
        return $this->modelo;
    }
    public function getMotor():float{
        return $this->motor;
    }
    public function getAno():int{
        return $this->ano;
    }

    // setters
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }

    // metodos gerais
    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno(),
        );
    }
}

$carro = new Carro();

$carro->setAno(2022);
$carro->setModelo("Civic");
$carro->setMotor(2.0);

print_r($carro->exibir());