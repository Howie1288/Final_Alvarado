<?php
require '../../modelos/Aplicacion.php';
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
        <h1 class="text-center">Modificar Asignacion</h1>
        <div class="row justify-content-center">
            <form action="/Final_Alvarado/controladores/aplicaciones/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name=" asignacion_id" value="<?= $asignacion[0][' ASIGNACION_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="asignacion_id_aplicacion">Asignacion de la Aplicacion</label>
                        <input type="text" name="nombre" id="asignacion_id_aplicacion" class="form-control" value="<?= $asignacion[0]['asignacion_id_aplicacion'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="asignacion_id_programador">Precio de la Aplicacion</label>
                        <input type="number" step="0.01" min="0" name="asignacion_id_programador" id="asignacion_id_programador" class="form-control" value="<?= $asignacion[0]['asignacion_id_programador'] ?>">
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

