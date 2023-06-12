<?php include_once '../../includes/header.php' ?>
<?php include_once '../../includes/navbar.php' ?>
<div class="container">
    <h1 class="text-center">Buscar Tarea</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/tareas/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="nombre">Nombre de la Tarea</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <label for="aplicacion_precio">ID Aplicacion</label>
                    <input type="number" step="0.01" min="0" name="aplicacion_precio" id="aplicacion_precio" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="nombre">Descripcion</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="fechainicio">Fecha Inicio</label>
                    <input type="date" name="fechainicio" id="fechainicio" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="fechafinalizacion">Fecha Finalizacion</label>
                    <input type="date" name="fechafinalizacion" id="fechafinalizacion" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control">
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
<?php include_once '../../includes/footer.php' ?>