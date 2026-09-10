<?php
// Carpeta donde se guardarán los archivos
$carpetaDestino = "uploads/";

// Variables para el mensaje que se mostrará al usuario
$mensaje = "";
$tipoAlerta = ""; // success o danger (clases de Bootstrap)

// Verificamos que llegó un archivo por POST
if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {

    $nombreArchivo = basename($_FILES["archivo"]["name"]);
    $rutaTemporal = $_FILES["archivo"]["tmp_name"];
    $rutaDestino = $carpetaDestino . $nombreArchivo;

    // Si la carpeta uploads/ no existe, la creamos
    if (!is_dir($carpetaDestino)) {
        mkdir($carpetaDestino, 0777, true);
    }

    // Movemos el archivo de la ubicación temporal a la carpeta uploads/
    if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
        $mensaje = "El archivo <strong>" . htmlspecialchars($nombreArchivo) . "</strong> se subió correctamente.";
        $tipoAlerta = "success";
    } else {
        $mensaje = "Ocurrió un error al mover el archivo al servidor.";
        $tipoAlerta = "danger";
    }

} else {
    $mensaje = "No se pudo subir el archivo. Verifica que seleccionaste uno.";
    $tipoAlerta = "danger";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la subida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="alert alert-<?php echo $tipoAlerta; ?> shadow-sm" role="alert">
                    <?php echo $mensaje; ?>
                </div>

                <div class="text-center">
                    <a href="index.php" class="btn btn-primary">
                        Regresar al formulario
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>