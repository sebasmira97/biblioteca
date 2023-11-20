<?php
// Conexión a la base de datos (reemplaza estos valores con los tuyos)
$servername = "DESKTOP-CGFT1EN";
$username = "DESKTOP-CGFT1EN\Usuario";
$password = "";
$dbname = "Biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibe los datos del formulario
$NumeroIdentificacion = $_POST['documento'];
$TipoIdentificacion = $_POST['tipo_identificacion'];
$NombreCompleto = $_POST['nombre'];
$Biblioteca = $_POST['biblioteca'];
$FechaNacimiento = $_POST['fecha_nacimiento'];
$Sexo = $_POST['sexo'];
$Celular = $_POST['celular'];
$Direccion = $_POST['direccion'];
$Barrio = $_POST['barrio'];
$Municipio = $_POST['municipio'];
$CorreoElectronico = $_POST['correo'];
$Contraseña = $_POST['contraseña'];
// Agrega el resto de los campos según sea necesario

// Prepara la consulta SQL (reemplaza esto con tu propia estructura de tabla)
$sql = "INSERT INTO tu_tabla (NumeroIdentificacion, TipoIdentificacion, NombreCompleto, Biblioteca, FechaNacimiento, Sexo, Celular, Direccion, Barrio, Municipio, CorreoElectronico, Contraseña   ) VALUES 
('$NumeroIdentificacion', '$TipoIdentificacion', '$NombreCompleto', '$Biblioteca', '$FechaNacimiento', '$Sexo', '$Celular', '$Direccion', '$Barrio', '$Municipio', '$CorreoElectronico', '$Contraseña' )";
// Agrega el resto de los campos según sea necesario

// Ejecuta la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión
$conn->close();
?>