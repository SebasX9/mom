<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
		include 'conexion2.php'; 
		$consulta = $conexion2 -> query("SELECT nombre,Edad,Fecha,VIP,Provincia FROM compania where provincia='madrid'") or die ("Ha fallado la conexión");
			while ( $registro = $consulta -> fetch_assoc() ) {
				echo '<table>'.
				"<th>nombre</th>
				 <th>Edad</th>
				 <th>Fecha</th>
				 <th>VIP</th>
				 <th>Provincia</th>".

				"<tr>".
				"<td>".$registro['nombre']."</td>".
				"<td>".$registro['Edad']."</td>".
				"<td>".$registro['Fecha']."</td>".
				"<td>".$registro['VIP']."</td>".
				"<td>".$registro['Provincia']."</td>".
			    "</tr>".
			    "</table>";
               }
			    $conexion2=null;
	?>

    <br>

</body>
</html>