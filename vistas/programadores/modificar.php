<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../../modelos/Programador.php';
    try {
        $programador = new Programador($_GET);

        $programadores = $programador->buscar();
       
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>

<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar Programadores</h1>
        <div class="row justify-content-center">
            <form action="/Final_Alvarado/controladores/programadores/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="pro_id"value="<?= $programadores[0]['PRO_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="pro_grado">Grado Programador</label>
                        <input type="text" name="pro_grado" id="pro_grado" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="pro_nombre">Nombre programador</label>
                        <input type="text" name="pro_nombre" id="pro_nombre" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="pro_apellido">Apellido del programador</label>
                        <input type="text" name="pro_apellido" id="pro_apellido" class="form-control" required>
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