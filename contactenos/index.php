<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Formulario de contacto en AJAX</title>
<link rel="stylesheet" type="text/css" href="estilos.css">

<script type="text/javascript" src="funciones.js"></script>
<style type="text/css">
<!--
body,td,th {
	font-size: 10px;
}
-->
</style>
</head>

<body>
<div id="formContenedor">
	<form id="formulario">
		<div id="transparencia">
			<div id="transparenciaMensaje">aaaaaaaaaaaa</div>
		</div>
		<table>
			<tbody>
				<tr>
					<td class="label">Nombre:</td>
					<td class="campo"><input class="inputNormal" type="text" id="inputNombre"></td>
					<td class="ayuda"><img src="ayuda.gif" alt="Ayuda" onmouseover="muestraAyuda(event, 'Nombre')"></td>
				</tr>
				<tr>
					<td class="label">Empresa:</td>
					<td class="campo"><input class="inputNormal" type="text" id="inputEmpresa"></td>
					<td class="ayuda"><img src="ayuda.gif" alt="Ayuda" onmouseover="muestraAyuda(event, 'Empresa')"></td>
				</tr>
				<tr>
					<td class="label">Tel�fono:</td>
					<td class="campo"><input class="inputNormal" type="text" id="inputTelefono"></td>
					<td class="ayuda"><img src="ayuda.gif" alt="Ayuda" onmouseover="muestraAyuda(event, 'Telefono')"></td>
				</tr>
				<tr>
					<td class="label">Mail:</td>
					<td class="campo"><input class="inputNormal" type="text" id="inputCorreo"></td>
					<td class="ayuda"><img src="ayuda.gif" alt="Ayuda" onmouseover="muestraAyuda(event, 'Correo')"></td>
				</tr>
				<tr>
					<td class="label">Comentarios:</td>
					<td class="campo"><textarea class="inputNormal" id="inputComentario"></textarea></td>
					<td class="ayuda"><img src="ayuda.gif" alt="Ayuda" onmouseover="muestraAyuda(event, 'Comentario')"></td>
				</tr>
			</tbody>
		</table>
		<br>
		<div>
			<button id="botonEnviar" onClick="validaForm()" type="button">Enviar</button>
			<button type="reset">Borrar</button>
		</div>
	</form>
</div>

<!-- Capa para mostrar los mensajes de ayuda al presionar los iconos correspondientes -->
<div id="mensajesAyuda">
	<div id="ayudaTitulo"></div>
	<div id="ayudaTexto"></div>
</div>
</body>
</html>