<?php include_once '../../includes/header.php' ?>
<?php include_once '../../includes/navbar.php' ?>
<div class="container">
    <h1 class="text-center">Formulario de ingreso de programadores</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/Programadores/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="nombre">Nombre del programador</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="apellido">Apellido del programador</label>
                    <input type="text" name="apellido" id="apellido" class="form-control">
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <label for="telefono">Telefono del programador</label>
                    <input type="number" name="telefono" id="telefono" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="direccion">Direccion del programador</label>
                    <input type="text" name="direccion" id="direccion" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="correo">Correo Electronico</label>
                    <input type="email" name="correo" id="correo" class="form-control">
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