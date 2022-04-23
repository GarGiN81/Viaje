<?php
require_once('Viaje.php');
echo "Bienvenidx a Viaje Feliz!\n";
function menu(){
    return $menu = "Por favor, indique qué operación desea realizar:\n
    1. Cargar un nuevo viaje.\n
    2. Modificar el código del viaje.\n
    2. Modificar el destino del viaje.\n
    3. Modificar la cantidad maxima permitida de pasajeros.\n
    4. Agregar Pasajero. \n
    5. Quitar Pasajero. \n
    6. Modificar Pasajero. \n
    7. Ver viaje. \n
    Para Salir pulse cualquier otra letra o número. \n";
}
do{
    echo menu();
    $opcion=trim(fgets(STDIN));
    if ($opcion>=1&&$opcion<8){
        switch ($opcion){
            case'1': //carga un nuevo viaje
                echo "Por favor, ingrese los datos solicitados a continuación:\n";
                echo "******************************\n";
                echo "Ingrese el código del viaje: \n";
                $numViaje = trim(fgets(STDIN));
                echo "Ingrese el destino: \n";
                $lugarViaje = trim(fgets(STDIN));
                echo "Ingrese la cantidad máxima de pasajeros permitidos: \n";
                $cantPasajeros = trim(fgets(STDIN));
                echo "******************************\n";
                $objViaje = new Viaje($numViaje, $lugarViaje, $cantPasajeros);
                break;
            case '2': //modifica el código del viaje
                echo "El viaje actual posee el código: #".$objViaje->getCodigoViaje(). '\n';
                echo "Ingrese el nuevo código: \n";
                $codigo = trim(fgets(STDIN));
                $objViaje->setCodigoViaje($codigo);
                break;
            case '3': //modifica el destino del viaje
                echo "El viaje posee como destino a: ".$objViaje->getDestinoViaje(). '\n';
                echo "Ingrese el nuevo destino del viaje: \n";
                $destino = trim(fgets(STDIN));
                $objViaje->setDestinoViaje($destino);
                break;
            case '4': //modifica la cantidad máxima de pasajeros que puede tener un viaje
                echo "El viaje posee ".$objViaje->getCantMaxPasajeros()." pasajeros. \n";
                echo "Ingrese la nueva cantidad máxima de pasajeros: \n";
                $cantidadPasajeros = trim(fgets(STDIN));
                $objViaje->setCantMaxPasajeros($cantidadPasajeros);
                break;
            case '5': //agrega un pasajero
                echo "ingrese los datos del pasajero que desea agregar: \n";
                echo "Nombre: ";
                $nombre=trim(fgets(STDIN));
                echo "\n Apellido: ";
                $apellido=trim(fgets(STDIN));
                echo "Numero de Documento: ";
                $numDni=trim(fgets(STDIN));
                agregarPasajero($nombre,$apellido,$numDni);
                break;

    }
    

    }
}while($opcion>=1&&$opcion<8);



//menu:permite cargar la información de un viaje, modificar y ver sus datos.
//funciones extras
function cargarPasajeros(){
    $arrayPasajeros=[];
    $arrayPasajeros[1]=["Nombre"=>"","Apellido"=>"","Numero de Documento"=>""];

}
function agregarPasajero($nombrePas,$apellidoPas,$numeroDoc){
    $pasajero[]=["Nombre"=>$nombrePas,"Apellido: "=>$apellidoPas,"Numero de Documento"=>$numeroDoc];
    $pasajero=[]; 
    return $pasajero;
}