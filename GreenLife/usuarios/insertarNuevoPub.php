<?php
$titulo=$_GET['title'];
$descripcion=$_GET['desc'];


require_once '../modelo/publicacion.php';
$nuevaPub=new Publicacion();
$resultado=$nuevaPub->ModificarPub($titulo,$descripcion,$id,$idUsuario);
if($resultado){
    
    header("Location:../misQuejas.php");
}
else{
    //echo $resultado; 
    header("Location: ../menuPrincipal.php");
}
?>