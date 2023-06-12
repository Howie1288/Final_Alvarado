<?php include_once '../../includes/header.php' ?>
<?php include_once '../../includes/navbar.php' ?>
<div class="container">
    <h1 class="text-center">Tareas por Aplicaciones</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/tareas/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">

            <div class="row mb-3">
                <div class="col">
                    <label for="nombre">Nombre de la Tarea</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="aplicacion">ID Aplicacion</label>
                    <input type="number" name="aplicacion" id="aplicacion" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control">
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
                    <button type="submit" class="btn btn-primary w-100">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once '../../includes/footer.php' ?>