<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Marketing</title>
</head>

<body>
    <header>
        <?php include('../inc/header.php'); ?>
    </header>

    <main class="main_marketing">
        <div class="main_marketing_contacto">
        <h4 class="h4_formulario_marketing">Contactate con Marketing</h4>
            <div class="contenedor_formulario">
                <form class="main_marketing_form" action="" method="POST">
                    <div class="contenedor_seccion_formulario_marketing">
                        <label for="nombre" >Nombre y Apellido</label>
                        <input type="text" id="nombre" name="nombre" maxlength="32" required>
                    </div>
                    <div class="contenedor_seccion_formulario_marketing">
                        <label for="email">E-mail</label>
                        <input type="mail" id="email" name="email" maxlength="48" required>
                    </div>
                    <div class="contenedor_seccion_formulario_marketing">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" maxlength="32" required>
                    </div>
                    <div class="contenedor_seccion_formulario_marketing">
                        <label for="mensaje">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" maxlength="256" required></textarea>
                    </div>
                    <div class="contenedor_boton_formulario_marketing">
                        <button type="submit">
                            <span>Enviar</span>
                            <span>></span>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </main>

    <footer>
        <?php include('../inc/footer.php'); ?>
    </footer>

    <!-- JS PRINCIPAL -->
    <script src="../js/header.js"></script>
</body>

</html>