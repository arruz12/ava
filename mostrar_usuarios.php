<?php
// Conexión a la base de datos
$servername = "registro";
$username = "usuario";
$password = "contraseña";
$dbname = "usuario";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: ". $conn->connect_error);
}

// Recibir datos del formulario
$usuario = $_POST['username'];
$contraseña = $_POST['password'];

// Insertar datos en la base de datos
$sql = "INSERT INTO usuario (usuario, contraseña) VALUES ('$usuario', '$contraseña')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo registro creado exitosamente";
} else {
  echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>