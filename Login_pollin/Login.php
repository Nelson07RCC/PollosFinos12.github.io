<?php
session_start(); // Iniciar sesión (debe estar al principio del archivo)

include '../db.php';

$Usuario = $_POST['Usuario'];
$Clave = $_POST['Clave'];

$sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Clave = '$Clave'";
$resultado = mysqli_query($conex, $sql);

// Verificar si se encontraron registros
if (mysqli_num_rows($resultado) > 0) {
    echo '<h3 class="ok">¡Inicio correctamente!</h3>';

    echo $usuario = $_POST['Usuario'];
    header("Location: ../galpones.crud/galpones.php");
    exit();
} else {
    // Mostrar ventana emergente con mensaje de error
    echo '<script>alert("Error de credenciales");</script>';
    
    // Redirigir de vuelta a la página de login
    echo '<script>window.location.href = "index.php";</script>';
}
?>
