<?php
$nombre =$_POST["nombre"];
$correo =$_POST["correo"];
$telefono =$_POST["telefono"];
$mensaje =$_POST["mensaje"];

echo "<h2>Formulario enviado correctamente</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Correo: $correo</p>";
echo "<p>Telefono: $telefono </p>";
echo "<p>Mensaje: $mensaje</p>";