<?php
use LDAP\Result;
class Cards{
    public $id;
    public $nombre;
    public $codigo;
    public $nivel;
    public $costo;
    public $color;
}

function getAllCard(){
    $listaCard =[];
    $path = $_SERVER['DOCUMENT_ROOT'];
    include($path."/animalesweb/php/connection/db.php");
    $sql = "SELECT ID, nombre, codigo, nivel, costo, color FROM cards";
    $result= $connection ->query($sql);
    if($result -> num_rows >0){
        while($rows = $result->fetch_assoc()){
            $object = new Cards();
            $object->id= $rows["ID"];
            $object->nombre = $rows["nombre"];
            $object->codigo = $rows["codigo"];
            $object->nivel = $rows["nivel"];
            $object->costo = $rows["costo"];
            $object->color = $rows["color"];
            $listaCards[] = $object;
        }
    }
    return $listaCard;
}
?>