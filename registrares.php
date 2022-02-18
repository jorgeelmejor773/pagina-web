<?php
$conexion = mysqli_connect("localhost", "root", "", "prueba");  
//include 'cn.php';
	// recuperar las variables
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$email = $_POST["email"];
	$usuario = $_POST["usuario"];
	$contraseña = $_POST["contraseña"];
	$telefono = $_POST["telefono"];

//consulta para insertar
	$contraseña = md5($contraseña);
$insertar = "INSERT INTO datos(nombre, apellidos, email, usuario, contraseña, telefono ) VALUES ('$nombre', '$apellidos', '$email', '$usuario', '$contraseña', '$telefono')";
//ejecutar consulta
$resutado = mysqli_query($conexion, $insertar);
if (!$resutado){
	echo "error al registrarse";

}else {
		echo "Datos Guardados Correctamente<br><a href='contacto.html' > volver</a>";
	
}
//cerrar conexion
mysqli_close($conexion);

?>
<?php 
//conectamos con el servidor
$conectar=@mysql_connect('localhost', 'root','');

//verificamos la conexion 

if (!$conectar) {
	echo "No se pudo conectar con el servidor";
} else {

	$base=mysql_select_db('bd_contacto');
	if (!$base) {
		echo "No se encontro la base de datos";
	}

}
//recuperar las variables 
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
// Hacemos la sentencia del sql 
$sql="INSERT INTO datos VALUES('$nombre',
								'$correo',
								'$telefono',
								'$mensaje')";
//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($conectar, $sql);
	//verificamos la ejecucion
	if ($ejecutar) {
		echo "Hubo Algun Error";
	}else {
		echo "Datos Guardados Correctamente<br> <a href='contacto.html' > volver </a>";
	
}
//cerrar conexion
mysqli_close($conectar);

 ?>

<?php
$conexion = mysql_connect("localhost", "root", "", "bd_contacto");  
//include 'cn.php';
	// recuperar las variables
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];

//consulta para insertar

$insertar = "INSERT INTO datos(nombre, correo,  telefono, mensaje ) VALUES ('$nombre',  '$correo',  '$telefono', '$mensaje')";
//ejecutar consulta
$resutado = mysqli_query($conexion, $insertar);
if (!$resutado){
	echo "error al registrarse";

}else {
		echo "Datos Guardados Correctamente<br><a href='contacto.html' > volver</a>";
	
}
//cerrar conexion
mysqli_close($conexion);

?>