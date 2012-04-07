<?php
include("lib/doctrine/Sql_Fotos.php");
include("lib/doctrine/Sql_Propiedad.php");
class Propiedad_FotoController extends Sql_Propiedad{
    
      public function propiedades_ofertadas(){
       $foto_consulta= new Sql_Fotos();
       $ArrPropiedades=$this->propiedades_en_oferta();
       
       foreach ($ArrPropiedades as $propiedad)
       {
           
          $foto=$foto_consulta->foto_propiedad($propiedad->getId_Propiedad());
          echo "<div>";
          echo $propiedad->getDireccion();
          echo $propiedad->getNombre();
          print  ' <a rel="example_group"'.'href="'.$foto->getRuta().'" title="'.$foto->getDescripcion().' " ><img style="width:75px; height:75px" alt ="" src="'.$foto->getRuta().'" /></a>';
          echo "<div/>";
       }
       
        
           
       
  
            
           
    }
    
    
}