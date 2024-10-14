<?php
use LDAP\Result;
class Planeta{
    public $id;
    public $nombre;
    public $imagen;
    
}

function getAllPlanetas(){
    $listaPlanetas =[];
    $path = $_SERVER['DOCUMENT_ROOT'];
    include($path."/animalesweb/php/connection/db.php");
    $sql = "SELECT id, nombre, imagen FROM planetas";
    $result= $connection ->query($sql);
    if($result -> num_rows >0){
        while($rows = $result->fetch_assoc()){
            $object = new Planeta();
            $object->id= $rows["id"];
            $object->nombre = $rows["nombre"];
            $object->imagen = $rows["imagen"];
            $listaPlanetas[] = $object;
        }
    }
    return $listaPlanetas;
}
?>