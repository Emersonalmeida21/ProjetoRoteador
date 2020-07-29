<?php

class Roteador301 {
    //Atributos do Sofware
      public $modelo;
      public $cor;
      public $antenas;
      public $portasvlan;
      public $wan;
      public $ligado;
      public $conectado;
      
              
      
           function __construct() {
               $this->modelo     = "Intelbras 301";
               $this->cor        = "Preto";
               $this->antenas    = 2;
               $this->portasvlan = true;
               $this->ligado     = false;
               
               
           }
           public function getModelo(){
               return $this->modelo;
           }
           public function setModelo($modelo){
               $this->modelo = $modelo;
           }
           public function getCor(){
               return $this->modelo;
           }
           public function setCor($cor){
               $this->cor = $cor;
           }
           public function getAntenas(){
               return $this->antenas;
           }
           public function setAntenas($antenas){
               $this->antenas = $antenas;
           }
           public function getPortasvlan(){
               return $this->portasvlan;
           }
           public function setPortasvlan($portasvlan){
               $this->portasvlan = $portasvlan;
           }
           public function getWan(){
               return $this->wan;
           }
           public function setWan($wan){
               $this->wan =$wan;
           }
           public function getLigado(){
               $this->ligado;
           }
           public function setLigado($ligado){
               $this->ligado = $ligado;
           }
           public function getDesligado(){
               return $this->desligado;
           }
           public function setDesligado($desligado){
               $this->desligado = $desligado;
           }
           public function getConectado(){
               return $this->conectado;
             
           }
           public function setConectado($conectado){
               $this->conectado = $conectado;
           }
           
           public function ligar(){
               $this->setLigado(true);
           }
           public function desligar(){
               $this->setLigado(false); 
           }
           public function conectadoarede(){
              if ($this->getLigado() && $this->getPortasvlan() == true){
                  print"<p>Agora voce ja pode usar sua rede</p>";
              } 
               
           }
           public function ligadonarede(){
               $this->setPortasvlan(true);
           }
           
      
      
}
