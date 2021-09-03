<?php
$nombreDepartamento=$_POST["departamento"];

$db=new mysqli('localhost','root','','tienda_master');
$db->query("SET NAMES 'utf8'");

 $sqlDepartamento="SELECT * FROM departamento WHERE nombre='$nombreDepartamento'";
 $consultaDepartamento=$db->query($sqlDepartamento);
 $fila=$consultaDepartamento->fetch_row();

 $sqlCiudades="SELECT * FROM ciudad WHERE departamento_id=$fila[0]";
 $consultaCiudades=$db->query($sqlCiudades);

$arrayDeCiudades=[];
 while($filaCiudades=$consultaCiudades->fetch_row()){
     
    array_push($arrayDeCiudades,$filaCiudades[1]);
 }
 $objeto=json_encode($arrayDeCiudades, JSON_UNESCAPED_UNICODE);
 echo $objeto;
?>