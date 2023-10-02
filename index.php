<?php
// Se incluyen los archivos necesarios
require_once("src/Models/Conexion.php");
require_once "src/Models/Docente.php";
require_once("src/Models/Materia.php");
require_once("src/Models/Especialidad.php");
require_once("src/Models/Comunidad.php");

// Se obtiene la URL actual
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

// URLs de control
$urlControl = array(
    $_SERVER['SERVER_NAME'] . "/Ingenieria-Electronica/",
    $_SERVER['SERVER_NAME'] . "/Ingenieria-Electronica/?option=0"
);

// ID de la carrera
$programaId = 10;
$api = 'http://localhost:3010';
$PATH_DOCENTE =  $GLOBALS['api'] . '/imagenes/Ing-Electronica/docentes/';

// Se crea una instancia de la clase Conexion
$conn = new Conexion();
$conn->connect();

// Se crean instancias de las clases Docente, Materia, Especialidad y Comunidad
$docente = new Docente();
$docente->setConnection($conn->getDB());

$materia = new Materia();
$materia->setConnection($conn->getDB());

$especialidad = new Especialidad();
$especialidad->setConnection($conn->getDB());

$comunidad = new Comunidad();
$comunidad->setConnection($conn->getDB());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ingeniería Mecátronica">
    <meta name="author" content="Daniela Castro Rodriguez, Gabriel Escobar Medina, Nancy Daniela Mendez Arpidez,
    Marco Gabriel Cortes Toledo, Yelitza Magali Rosas Jimenez, Ángel Manuel Sandria Pérez">
    <link rel="icon" href="img/itver-logo.PNG" />

    <!-- Se incluyen los estilos CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Ingeniería Electrónica</title>
</head>

<?php
// Se incluye el encabezado
include_once "src/View/header.php";

// Se recorre el array de URLs de control
for ($i = 0; $i < 2; $i++) {
    // Si la URL actual coincide con una URL de control, se incluye la vista "inicio.php"
    if ($url == $urlControl[$i]) {
        include_once "src/View/inicio.php";
    }
}

// Se verifica si se ha recibido el parámetro 'option' por GET
if (isset($_GET['option'])) {
    // Si se ha recibido 'option', se incluye el controlador correspondiente
    include_once "src/Controllers/page-controller.php";
} else {
    // Si no se ha recibido 'option', se incluye la vista "inicio.php"
    include_once "src/View/inicio.php";
}
?>

<?php
// Se incluye el pie de página
include_once "src/View/footer.php";
?>

</html>
