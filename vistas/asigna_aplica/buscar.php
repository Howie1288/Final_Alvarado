<?php
require_once '../../modelos/Aplicacion.php';
require_once '../../modelos/Programador.php';
    try {
        $aplicacion = new Aplicacion();
        $programador = new Programador();
        $aplicaciones = $aplicacion->buscar();
        $programadores = $programador->buscar();
        
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario de búsqueda de ventas</h1>
        <div class="row justify-content-center">
            <form action="/Final_Alvarado/controladores/aplicaciones/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="aplicaciones">Aplicaciones</label>
                        <select name="aplicaciones" id="aplicaciones" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($aplicaiones as $key => $aplicacion) : ?>
                                <option value="<?= $aplicacion['id_aplicacion'] ?>"><?= $aplicacion['nombre'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="fecha">Fecha de la Inicio</label>
                        <!--   PARA QUE LA HORA SE IMPRIMA EL EL FOMATO SOLICITADO -->
                        <input type="datetime-local" value="<?= date('Y-m-d H:i') ?>" name="fecha" id="fecha" class="form-control">
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
<?php include_once '../../includes/footer.php'?>