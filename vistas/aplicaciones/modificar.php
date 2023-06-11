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
        <h1 class="text-center">Modificar Aplicaciones</h1>
        <div class="row justify-content-center">
            <form action="/Final_Alvarado/controladores/aplicaciones/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="id_aplicacion" value="<?= $productos[0]['ID_APLICACION'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre">Nombre de la Aplicacion</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $productos[0]['APLICACION_NOMBRE'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="precio">Precio de la Aplicacion</label>
                        <input type="number" step="0.01" min="0" name="precio" id="precio" class="form-control" value="<?= $productos[0]['APLICACION_PRECIO'] ?>">
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

