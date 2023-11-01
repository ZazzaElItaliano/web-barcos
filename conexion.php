<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Ejemplo de conexión a base de datos MySQL con PHP.

	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "bbdd_barcos";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario,$password,$basededatos ) or die ("No se ha podido conectar al servidor de Base de datos");
	

	// establecer y realizar consulta. guardamos en variable.
	
	
?>
</body>
</html>