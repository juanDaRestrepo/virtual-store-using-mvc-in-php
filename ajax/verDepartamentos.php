<?php
$db=new mysqli('localhost','root','','tienda_master');
$db->query("SET NAMES 'utf8'");

 $sql="SELECT * FROM departamento";
 $consulta=$db->query($sql);
 $arrayDeDepartamentos=[];
 while($fila=$consulta->fetch_row()){
     array_push($arrayDeDepartamentos,$fila[1]);
 }
 $objeto=json_encode($arrayDeDepartamentos, JSON_UNESCAPED_UNICODE);
 echo $objeto;
?>