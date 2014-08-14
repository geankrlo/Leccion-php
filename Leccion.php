<?php

class leccion
{
    private $id;
    private $nombre;    
    private $parcial;
    private $final;
    private $mejoramiento;    
    private $notaPromedio;
    
     function __construct($id, $nombre, $parcial, $final, $mejoramiento, $notaPromedio) {
       $this->id = $id;
       $this->nombre = $nombre;       
       $this->parcial = $parcial;
       $this->final = $final;
       $this->mejoramiento = $mejoramiento;       
       $this->notaPromedio = $notaPromedio;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setnombre($nombre){
       $this->nombre = $nombre;
     } 
     function getnombre(){
       return $this->nombre;
     }  
     function setparcial($parcial){
       $this->parcial = $parcial;
     } 
     function getparcial(){
       return $this->parcial;
     }  
     function setfinal($final){
       $this->final = $final;
     } 
     function getfinal(){
       return $this->final;
     }   
     function setmejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getmejoramiento(){
       return $this->mejoramiento;
     }   
     function setnotaPromedio($notaPromedio){
       $this->notaPromedio = $notaPromedio;
     } 
     function getnotaPromedio(){
       return $this->notaPromedio;
     } 
}

?> 
