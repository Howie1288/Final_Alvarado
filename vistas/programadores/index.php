<?php include_once '../../includes/header.php' ?>
<?php include_once '../../includes/navbar.php' ?>
<div class="container">
    <h1 class="text-center">Formulario de ingreso de programadores</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/Programadores/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="programador_grado">Grado Militar del programador</label>
                    <input type="text" name="programador_grado" id="programador_grado" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="programador_nombre">Nombre del Programador</label>
                    <input type="text" name="programador_nombre" id="programador_nombre" class="form-control">
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <label for="programador_apellido">Apellidos del programador</label>
                    <input type="number" name="programador_apellido" id="programador_apellido" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="programador_situacion">Situacion del Programador</label>
                    <input type="text" name="programador_situacion" id="programador_situacion" class="form-control">
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
<?php include_once '../../includes/footer.php' ?>