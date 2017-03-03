<?php
$fecha=date("d/m/y - H:i");
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$comentarios = $_POST['comentarios'];

$mensaje="Tienés un nuevo mensaje desde el Sitio:
Fecha: $fecha <br>
Nombre: ".$nombre."<br>
Empresa: ".$empresa."<br>
Telefono: ".$telefono."<br>
Correo electrónico: ".$correo."<br>
Comentarios: ".$comentarios."";
@mail("juanma_0012@hotmail.com", "Mensaje desde La pagina", $mensaje, "MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\nFrom: <info@procalivalle.com.co>");
		
		echo "OK";
?>
