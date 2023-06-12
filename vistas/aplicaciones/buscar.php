<?php include_once '../../includes/footer.php' ?>

<?php
require_once '../../modelos/Aplicacion.php';

try {
    $aplicacion = new Aplicacion($_GET);
    $aplicacion = $aplicacion->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}
?>
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario de búsqueda de aplicaciones</h1>
        <div class="row justify-content-center">
            <form action="/Final_Alvarado/controladores/aplicaciones/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="mb-3">
                    <label for="aplicacion_nombre" class="form-label">Ingrese el nombre de la aplicación</label>
                    <input type="text" name="aplicacion_nombre" id="aplicacion_nombre" class="form-control">
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="aplicacion_fecha_inicio">Fecha de la aplicación</label>
                        <input type="date"  name="aplicacion_fecha_inicio" id="aplicacion_fecha_inicio" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>