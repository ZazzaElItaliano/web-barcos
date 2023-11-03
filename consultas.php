<?php
include("conexion.php");

$consulta = "SELECT BC.NOMBRE_BARCO, C.DESPLAZAMIENTO, C.NRO_CANIONES
FROM BARCO_CLASE BC
JOIN CLASES C ON BC.CLASE = C.CLASE
JOIN RESULTADOS R ON BC.NOMBRE_BARCO = R.NOMBRE_BARCO
WHERE R.NOMBRE_BATALLA = 'Guadalcanal'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

$consulta1="SELECT PAIS
FROM CLASES
WHERE TIPO = 'ACORAZADO' OR TIPO = 'CRUCERO'
GROUP BY PAIS
HAVING COUNT(DISTINCT TIPO) = 2";
$resultado1 = mysqli_query( $conexion, $consulta1 ) or die ( "Algo ha ido mal en la consulta a la base de datos");

$consulta2= "SELECT r.NOMBRE_BATALLA, c.PAIS, count(*) as NUMERO_DE_BARCOS from CLASES as c join RESULTADOS as r ON c.CLASE=(select clase from BARCO_CLASE where NOMBRE_BARCO = r.NOMBRE_BARCO) group by r.NOMBRE_BATALLA, c.PAIS having count(*) >=3;";
$resultado2 = mysqli_query( $conexion,$consulta2 ) or die (  "Algo ha ido mal en la consulta a la base de datos");

$resultados_array = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
$resultados_array1=mysqli_fetch_all($resultado1, MYSQLI_ASSOC);
$resultados_array2=mysqli_fetch_all($resultado2, MYSQLI_ASSOC);
?>