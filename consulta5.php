<?php
include 'conexion2.php';

// Consulta a la base de datos
$consulta = $conexion2->query("SELECT nombre,Edad,Fecha,VIP,Provincia FROM compania where edad > 17 ") or die("Ha fallado la conexión");

// Función para convertir a mayúsculas y contar caracteres
function procesarRegistro($registro) {
    // Convertir nombre a mayúsculas
    $registro['nombre'] = strtoupper($registro['nombre']);

    // Contar caracteres en el nombre
    $numCaracteresNombre = strlen($registro['nombre']);

    // Imprimir fila de la tabla con los datos modificados
    echo "<tr>";
    echo "<td>" . $registro['nombre'] . "</td>";
    echo "<td>" . $registro['Edad'] . "</td>";
    echo "<td>" . $registro['Fecha'] . "</td>";
    echo "<td>" . $registro['VIP'] . "</td>";
    echo "<td>" . $registro['Provincia'] . "</td>";
    echo "<td>" . $numCaracteresNombre . "</td>"; // Agregar columna para el número de caracteres
    echo "</tr>";
}

// Crear la tabla
echo "<table>";
echo "<tr><th>Nombre (Mayúsculas)</th><th>Edad</th><th>Fecha</th><th>VIP</th><th>Provincia</th><th>Caracteres en Nombre</th></tr>";

// Iterar sobre los resultados de la consulta y procesar cada registro
while ($registro = $consulta->fetch_assoc()) {
    procesarRegistro($registro);
}

echo "</table>";