<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 2 - Subida de Archivos</title>
    <!--  ddBootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">

        <div class="text-center mb-4">
            <h1 class="fw-bold">Laboratorio 2 - Grupo 8</h1>
            <p class="text-muted">Formulario para subir archivos con PHP</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- Espacio con los integrantes del grupo -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Integrantes del grupo</h5>
                        <ul class="mb-0">
                            <li>Neiyel Rodríguez Mora</li>
                            <li>Melany Amador</li>
                        </ul>
                    </div>
                </div>

                <!-- Formulario para subir el archivo -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Subir archivo</h5>

                        <form action="subir.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="archivo" class="form-label">Selecciona un archivo (imagen o PDF)</label>
                                <input class="form-control" type="file" id="archivo" name="archivo" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                Enviar archivo
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>