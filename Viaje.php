<?php
class Viaje{
    private $codigoViaje;
    private $destinoViaje;
    private $cantMaxPasajeros;
    private $coleccionPasajeros;

    public function __construct($codigoViaje,$destinoViaje,$cantMaxPasajeros,$coleccionPasajeros){
        $this->codigoViaje=$codigoViaje;
        $this->destinoViaje=$destinoViaje;
        $this->cantMaxPasajeros=$cantMaxPasajeros;
        $this->coleccionPasajeros=$coleccionPasajeros;
    }
    //permite obtener el valor del atributo que tiene en ese momento
    public function getCodigoViaje(){
        return $this->codigoViaje;
    }
    public function getDestinoViaje(){
        return $this->destinoViaje;
    }
    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    public function getColeccionPasajeros(){
        return $this->coleccionPasajeros;
    }
//permite dado un objeto cambiar el valor del atributo, 
//recibe un valor por parámetro y lo asigna al objeto del atributo
    public function setCodigoViaje($codigoViaje){
        $this->codigoViaje=$codigoViaje;
    }
    public function setDestinoViaje($destinoViaje){
        $this->destinoViaje=$destinoViaje;
    }
    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this->cantMaxPasajeros=$cantMaxPasajeros;
    }
    public function setColeccionPasajeros($coleccionPasajeros){
        $this->coleccionPasajeros=$coleccionPasajeros;
    }

}