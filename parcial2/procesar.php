<?php
$nombre =$_POST["nombre"];
$correo =$_POST["correo"];
$pedido =$_POST["pedido"];
$productos = [
    "Salteña de pollo - Bs 6",
    "Docena de salteñas - Bs 65",
    "Refresco de mocochinchi - Bs 5"
];
echo "<h3>Nuestra carta</h3>";
echo "<ul>";

foreach ($productos as $producto) {
    echo "<li>$producto</li>";
}

echo "</ul>";
echo "<h2>Pedido recibido en Salteneria El Horno</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Correo: $correo</p>";
echo "<p>Pedido: $pedido</p>";
echo "<h4>Te atiende Katherine Lopez Ramos</h4>";