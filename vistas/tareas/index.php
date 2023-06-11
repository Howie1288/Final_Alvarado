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
                    <label for="ID Aplicacion">ID Aplicacion</label>
                    <input type="number" step="0.01" min="0" name="ID Aplicacion" id="ID Aplicacion" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="Descripcion">Descripcion</label>
                    <input type="text" name="Descripcion" id="Descripcion" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="Fecha Inicio">Fecha Inicio</label>
                    <input type="date" name="Fecha Inicio" id="Fecha Inicio" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="Fecha Finalizacion">Fecha Finalizacion</label>
                    <input type="date" name="Fecha Finalizacion" id="Fecha Finalizacion" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="Estado">Estado</label>
                    <input type="text" name="Estado" id="Estado" class="form-control">
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