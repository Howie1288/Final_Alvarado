<?php include_once '../../includes/header.php' ?>
<?php include_once '../../includes/navbar.php' ?>
<div class="container">
    <h1 class="text-center">Buscar Aplicaciones</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/aplicaciones/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="aplicacion_nombre">Nombre de la Aplicacion</label>
                    <input type="text" name="aplicacion_nombre" id="aplicacion_nombre" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="aplicacion_fecha_inicio">Fecha inicio de la Aplicacion</label>
                    <input type="date"  name="aplicacion_fecha_inicio" id="aplicacion_fecha_inicio" class="form-control">
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