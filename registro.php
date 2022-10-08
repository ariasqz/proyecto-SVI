<?php
require 'data.php';

$message = '';


if (!empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['direccion']) && !empty($_POST['documento']) && !empty($_POST['fecha']) && !empty($_POST['mensaje'])) {
    $sql = "INSERT INTO datos_usuarios (nombre, telefono, direccion, documento, fecha, mensaje) VALUES (:nombre, :telefono, :direccion, :documento, :fecha, :mensaje)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':telefono', $_POST['telefono']);
    $stmt->bindParam(':direccion', $_POST['direccion']);
    $stmt->bindParam(':documento', $_POST['documento']);
    $stmt->bindParam(':fecha', $_POST['fecha']);
    $stmt->bindParam(':mensaje', $_POST['mensaje']);

    if ($stmt->execute()) {
        $message = 'Datos guardados exitosamente';
        header('location: menu.html');
    } else {
        $message = 'error';
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro SVI</title>
    <link rel="stylesheet" href="css/registro.css">
    <script src="https://kit.fontawesome.com/5210d62ad0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet" />



</head>

<body>

    <div class="content">

        <h1 class="logo">Registro <span>SVI</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <form action="registro.php" method="post">
                    <div class="form-control">
                        <input type="text" name="nombre" required>
                        <label>
                            <span style="transition-delay:0ms">N</span><span style="transition-delay:50ms">o</span><span style="transition-delay:100ms">m</span><span style="transition-delay:150ms">b</span><span style="transition-delay:200ms">r</span><span style="transition-delay:250ms">e</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <input type="text" name="telefono" required>
                        <label>
                            <span style="transition-delay:0ms">T</span><span style="transition-delay:50ms">e</span><span style="transition-delay:100ms">l</span><span style="transition-delay:150ms">e</span><span style="transition-delay:200ms">f</span><span style="transition-delay:250ms">o</span><span style="transition-delay:300ms">n</span><span style="transition-delay:350ms">o</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <input type="text" name="direccion" required>
                        <label>
                            <span style="transition-delay:0ms">D</span><span style="transition-delay:50ms">i</span><span style="transition-delay:100ms">r</span><span style="transition-delay:150ms">e</span><span style="transition-delay:200ms">c</span><span style="transition-delay:250ms">c</span><span style="transition-delay:300ms">i</span><span style="transition-delay:350ms">ó</span><span style="transition-delay:400ms">n</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <input type="text" name="documento" required>
                        <label>
                            <span style="transition-delay:0ms">D</span><span style="transition-delay:50ms">o</span><span style="transition-delay:100ms">c</span><span style="transition-delay:150ms">u</span><span style="transition-delay:200ms">m</span><span style="transition-delay:250ms">e</span><span style="transition-delay:300ms">n</span><span style="transition-delay:350ms">t</span><span style="transition-delay:400ms">o</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <input type="text" name="fecha" required>
                        <label>
                            <span style="transition-delay:0ms">F</span><span style="transition-delay:50ms">e</span><span style="transition-delay:100ms">c</span><span style="transition-delay:150ms">h</span><span style="transition-delay:200ms">a</span><span style="transition-delay:250ms"><span></span>del</span><span style="transition-delay:300ms"><span></span>caso</span><span style="transition-delay:350ms"><span></span>(dia/mes/año)</span>
                        </label>
                    </div>

                    <p class="block">
                        <label>
                            <span>Descripcion del caso</span>
                        </label>
                        <textarea name="mensaje" rows="3" require></textarea>
                    </p>
                    <p class="block">
                        <button type="submit">Enviar</button>
                    </p>
                </form>


                <?php if (!empty($message)) : ?>
                    <p> <?= $message ?></p>
                <?php endif; ?>

            </div>
            <div class="contact-info">
                <div class="card">
                    <div class="card-img"></div>
                    <div class="card-info">
                        <p class="text-title">Registra tus Datos</p>
                        <p class="text-body">Recuerda estos datos solo los podremos ver nosotros y la policia así que
                            puedes estar tranquil@ en compartirlos</p>
                    </div>
                    <div class="card-footer">
                        <span class="text-title">SVI</span>
                        <div class="card-button">
                            <span> <i class="fa-solid fa-arrow-left"><a href="menu.html">   volver</a></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>