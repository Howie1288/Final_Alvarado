<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../../modelos/aplicacion.php';
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
    <div class="container">
        <h1 class="text-center">Modificar Aplicaciones</h1>
        <div class="row justify-content-center">
            <form action="/Final_Alvarado/controladores/aplicaciones/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="apli_id" value="<?= $aplicaciones[0]['APLI_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="apli_nombre">Nombre Aplicacion</label>
                        <input type="text" name="apli_nombre" id="apli_nombre" class="form-control" value="<?= $aplicaciones[0]['APLI_NOMBRE'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="apli_fecha_inicio">Fecha inicio Aplicacion</label>
                        <input type="date" name="apli_fecha_inicio" id="apli_fecha_inicio" class="form-control" value="<?= $aplicaciones[0]['APLI_FECHA_INICIO'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>