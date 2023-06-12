<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../modelos/Aplicacion.php';
    try {
        $aplicacion = new Aplicacion($_GET);
        $aplicaciones = $aplicacion->buscar();
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }

?>
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario Aplicaciones</h1>
        <div class="row justify-content-center">
            <form action="/Final_Alvarado/controladores/aplicaciones/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
            <div class="mb-3">
                    <label for="apli_nombre" class="form-label">Ingrese el nombre de la Aplicacion</label>
                    <input type="text" name="apli_nombre" id="apli_nombre" class="form-control">
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="apli_fecha_inicio">Fecha de la aplicacion</label>
                        <input type="date"  name="apli_fecha_inicio" id="apli_fecha_inicio" class="form-control">
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