<?php

include_once('Leccion.php');
include_once('Collector.php');

class LeccionCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM leccion");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Leccion($c{'id'},$c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejoramiento'},$c{'notaPromedio'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

}
?>

