<?php include_once '../../includes/header.php' ?>
<?php include_once '../../includes/navbar.php' ?>
<div class="container">
    <h1 class="text-center">Buscar Tarea</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/tareas/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_id_aplicacion">ID APLICACION</label>
                    <input type="number" name="tarea_id_aplicacion" id="tarea_id_aplicacion" class="form-control">
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_descripcion">DESCRIPCION</label>
                    <input type="text" step="0.01" min="0" name="tarea_descripcion" id="tarea_descripcion" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for=" tarea_estado">ESTADO</label>
                    <input type="text" name=" tarea_estado" id=" tarea_estado" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_fecha">Fecha Inicio</label>
                    <input type="date" name="tarea_fecha" id="tarea_fecha" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_situacion">SITUACION</label>
                    <input type="text" name="tarea_situacion" id="tarea_situacion" class="form-control">
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