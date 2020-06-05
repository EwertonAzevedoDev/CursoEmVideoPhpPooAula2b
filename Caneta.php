<?php

class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga = 100;
    var $tampada = true;
    var $guardada = true;

    public function rabiscar()
    {   
        if($this->guardada == true){
            echo "<p>Não peguei a caneta</p>";
        }
        elseif($this->tampada == true){            
            echo "<p>Não posso rabiscar, a caneta está tampada</p>";
        }else{
            if($this->cor == "Azul"){
                $cor = "#0000ff";
            }elseif($this->cor == "Verde"){
                $cor = "#00ff00";
            }elseif($this->cor == "Vermelha"){
                $cor = "#ff0000";
            }else{
                $cor = "#000000";
            }
            if($this->ponta == "Porosa"){
                $font = 900;
            }else{
                $font = 300;
            }
            echo "<p style='color:{$cor}; font-weight:{$font};'>Estou rabiscando</p>";
        }
        
    }

    public function tampar()
    {
        if($this->tampada == true){
            echo "<p>Já está tampada</p>";
        }else{
            $this->tampada = true;
            echo "<p>Tampando caneta...</p>";
        }
    }

    public function destampar()
    {
        if($this->tampada == false){
            echo "<p>Já está destampada</p>";
        }else{
            $this->tampada = false;
            echo "<p>Destampando caneta...</p>";
        }
    }

    public function pegar()
    {
        if($this->guardada == true){
            echo "<p>Pegando caneta...</p>";
            $this->guardada = false;
        }else{
            echo "<p>Já peguei a caneta.</p>";
        }
    }

    public function guardar()
    {
        if($this->guardada == false && $this->tampada == true){
            echo "<p>Guardando caneta...</p>";
            $this->guardada = true;
        }elseif($this->guardada == false && $this->tampada == false){
            echo "<p>Não posso guardar a caneta destampada</p>";            
        }else{
            echo "<p>Já estou guardada</p>";
        }
    }
}
