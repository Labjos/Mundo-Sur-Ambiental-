<?php 
$nombre_form=$_POST['nombre'];
$apellido_form=$_POST['apellido'];
$organizacion_form=$_POST['organizacion'];
$telefono_form=$_POST['telefono'];
$correo_form=$_POST['correo'];
$mensaje_form=$_POST['contenido'];

$cuerpo= "Nombre: ".$nombre_form."\r\n"."Apellido: ".$apellido_form."\r\n"."Organizacion: ".$organizacion_form."\r\n"."Celular o Telefono: ".$telefono_form."\r\n"."Email: ".$correo_form."\r\n"."Mensaje: ".$mensaje_form; 

mail("vgonzalez@mdsambiental.com","Consulta desde la WEB", $cuerpo);

include("conexion.php");

mysqli_query($datos_bd, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$organizacion_form', $telefono_form,'$correo_form','$mensaje_form')");  

header("Location: contacto.php?e=ok#respuesta");
?>