<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<div class="container">
        <h1 class="text-center">Ingreso Programadores</h1>
        <div class="row justify-content-center">
            <form action="/Final_Alvarado/controladores/programadores/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                    <div class="col">
                        <label for="pro_grado">Grado Programador</label>
                        <input type="text" name="pro_grado" id="pro_grado" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                    <label for="pro_nombre">Nombre Programador</label>
                        <input type="text" name="pro_nombre" id="pro_nombre" class="form-control">
                    </div>
                    <div class="row mb-3">
                    <div class="col">
                        <label for="pro_apellido">Apellido Programador</label>
                        <input type="text" name="pro_apellido" id="pro_apellido" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include_once '../../includes/footer.php'?>
