<?php
class Viaje{
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajeros;
    public function __construct($codigo,$destino,$cantMaxPasajeros,$pasajeros){
        $this->codigo=$codigo;
        $this->destino=$destino;
        $this->cantMaxPasajeros=$cantMaxPasajeros;
        $this->pasajeros=$pasajeros;
    }
    //permite obtener el valor del atributo que tiene en ese momento
    public function getCodigo(){
        return $this->codigo;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    public function getPasajeros(){
        return $this->pasajeros;
    }
//permite dado un objeto cambiar el valor del atributo, 
//recibe un valor por parámetro y lo asigna al objeto del atributo
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function setDestino($destino){
        $this->destino=$destino;
    }
    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this->cantMaxPasajeros=$cantMaxPasajeros;
    }
    public function setPasajeros($pasajeros){
        $this->pasajeros=$pasajeros;
    }

}