<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../../modelos/Programador.php';
require '../../modelos/Aplicacion.php';
require '../../modelos/asignacion.php';



try {
    $programador = new Programador($_GET);
    $programadores = $programador->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}

try {
    $asignacion = new Asignacion($_GET);
    $asignacion = $asignacion->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}

try {
    $aplicacion = new Aplicacion($_GET);
    $aplicaciones = $aplicacion->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}
?>

<?php include_once '../../includes/header.php' ?>
<div class="container">
    <h1 class="text-center">Modificar Programadores y Aplicaciones</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/asignacion/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="asi_id" value="<?= $asignacionprogramadores[0]['ASI_ID'] ?>" >
            <div class="row mb-3">
                <div class="col">
                    <label for="asi_apli_id">Aplicación</label>
                    <select name="asi_apli_id" id="asi_apli_id" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($aplicaciones as $key => $aplicacion) : ?>
                            <option value="<?= $aplicacion['APLI_ID'] ?>"><?= $aplicacion['APLI_NOMBRE'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="asi_pro_id">Programador</label>
                    <select name="asi_pro_id" id="asi_pro_id" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($programadores as $key => $programador) : ?>
                            <option value="<?= $programador['PRO_ID'] ?>"><?= $programador['PRO_NOMBRE'] ?></option>
                        <?php endforeach ?>
                    </select>
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
<?php include_once '../../includes/footer.php' ?>
