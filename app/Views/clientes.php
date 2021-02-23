<!DOCTYPE html>
<html lang="es-mx">

<head>
    <title>Clientes - Delikat</title>
    <?php echo $this->include('head'); ?>
    <script src="<?php echo base_url('js/modulo/clientes.js');?>"></script>
</head>

<body>
    <?php echo $this->include('navbar'); ?>

    <!-------------------------------------MODAL PARA AGRGEGAR CLIENTE---------------------------------------->
    <div class="pt-4 container">
        <button type="button" id="btnAgregar" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #23a888; border: #23a888;">Agregar Cliente</button>
        <br>
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #23a888;">
                        <h5 class="font-weight-bolder" id="exampleModalLabel" style="color :ivory;">Datos de Cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input id="nombre" type="text" class="form-control" placeholder="Nombre">
                            <div class="input-group-append">
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input id="celular" type="text" class="form-control" placeholder="Celular">
                            <div class="input-group-append">
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input id="correo" type="text" class="form-control" placeholder="Correo electrónico">
                            <div class="input-group-append">
                            </div>
                        </div>
                        <!------------------------SEPARACION DEL MODAL--------------------------->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button id="btnGuardarCambios" type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #23a888; border: #23a888;  ">Guardar
                            Cambios <i class="far fa-save"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!--------------------------------------------------TABLA DE INVENTARIO--------------------------------------->
        <table id="tabla" class="table table-striped table-bordered -hover  table-responsive-md">
            <thead>
                <tr style="background-color: #DAF0D8">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Saldo Electrónico</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <!----------------------------------------------REGISTROS DE LA TABLA----------------------------------------------->
            <tbody>
                <?php for ($i = 0; $i < count($tabla); $i++) { ?>
                    <tr>
                        <th scope="row"><?php echo $tabla[$i]['id'] ?></th>
                        <td><?php echo $tabla[$i]['Nombre'] ?></td>
                        <td><?php echo $tabla[$i]['Celular'] ?></td>
                        <td><?php echo $tabla[$i]['Correo_Electronico'] ?></td>
                        <td><?php echo $tabla[$i]['Saldo_Electronico'] ?></td>
                        <td><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #CDD2CC; border: #000000; color: black;" onclick="getCliente(<?php echo $tabla[$i]['id'] ?>)"><i class="far fa-edit"></i></button>
                        </td>
                        <td><button type="button" data-toggle="modal" data-target="#ModalDelete" class="btn btn-primary" style="background-color: #F3A697; border: #000000; color: black;" onclick="setId(<?php echo $tabla[$i]['id'] ?>)"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!---------------------------MODAL PARA ELIMINAR--------------------->
    <div class="modal" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-light" id="exampleModalLabel" style="text-align: center;">¡Alerta!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center;"> Se elimará el cliente seleccionado
                    ¿Desea continuar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="btnEliminar" class="btn btn-secondary" data-dismiss="modal" style="background-color:#23a888;
         color:#fff; ">Si</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!------------------------------------------------BOTONES DE PAGINACION DE TABLA----------------------------------------------------------------->
    <nav class="container" aria-label="...">
        <ul class="pagination row justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#!" tabindex="-1" style="background-color: #ffff; color: #23a888;">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#!" style="color: #23a888;">1</a></li>
            <li class="page-item active">
                <a class="page-link" href="#!" style="background-color: #23a888;">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#!" style="color: #23a888;">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#!" style="color: #23a888; background-color: #ffff;">Siguiente</a>
            </li>
        </ul>
    </nav>

</body>

</html>