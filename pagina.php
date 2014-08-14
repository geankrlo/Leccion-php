<?php
include_once("LeccionCollector.php");

$id =1;

$LeccionCollectorObj = new LeccionCollector();
	echo "<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.css' />";
	echo "<div class='container'>";
	echo "<table class='table table-striped'>";
	echo "<thead>
	        <tr>
	          <th class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>Id</th>
	          <th class='col-xs-12 col-sm-2 col-md-2'>Nombre</th>
	          <th class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>Parcial</th>
	          <th class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>Final</th>
	          <th class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>Mejoramiento</th>
	          <th class='col-xs-12 col-sm-2 col-md-2'>Nota Promedio</th>
	        </tr>
	      </thead>";
	//echo $c->getId() . "  | " .$c->getNombre() . "  | " .$c->getParcial() . "  | " .$c->getFinal() . "  | " .$c->getMejoramiento() . "  | " .$c->getNotaPromedio();                                     
	echo "</table>";
	echo "</div>"; 
foreach ($LeccionCollectorObj->showDemos() as $c){
	echo "<div class='container'>";
	echo "<table class='table table-striped'>";
	echo "<tr>
          <td class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>". $c->getId(). "</td>
          <td class='col-xs-12 col-sm-2 col-md-2'>".$c->getNombre()."</td>
          <td class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>".$c->getParcial()."</td>
          <td class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>".$c->getFinal()."</td>
          <td class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>".$c->getMejoramiento()."</td>
          <td class='col-xs-12 col-sm-2 col-md-2'>".$c->getNotaPromedio()."</td>
        </tr>";
	//echo $c->getId() . "  | " .$c->getNombre() . "  | " .$c->getParcial() . "  | " .$c->getFinal() . "  | " .$c->getMejoramiento() . "  | " .$c->getNotaPromedio();                                     
	echo "</table>";
	echo "</div>"; 
}

?>
