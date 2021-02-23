<!DOCTYPE html>
<html lang="es-mx">

<head>
    <title>Productos - Delikat</title>
    <?php echo $this->include('componente/head'); ?>
    <script src="<?php echo base_url('js/modulo/productos.js'); ?>"></script>
</head>

<body>
    <?php echo $this->include('componente/navbar'); ?>
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
                <div class="modal-body" style="text-align: center;"> Se elimará el producto seleccionado
                    ¿Desea continuar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#23a888;
           color:#fff; ">Si</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-------------------------------------MODAL PARA AGRGEGAR PRODUCTO---------------------------------------->
    <div class="pt-4 container">
        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #23a888; border: #23a888;  ">Agregar Producto</button>
        <br>
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #23a888;">
                        <h5 class="font-weight-bolder" id="exampleModalLabel" style="color :ivory;">Agrega tu pedido aquí</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p class="font-weight-bolder">Prodcuto</p>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Nombre del producto">
                            <div class="input-group-append">
                            </div>
                        </div>
                        <br>
                        <select class="custom-select">
                            <option selected>Verdura</option>
                            <option value="1">Fruta</option>
                            <option value="2">Aderezo</option>
                            <option value="3">Carne</option>
                            <option value="4">Pan</option>
                        </select>
                        <br>
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="Cantidad">
                            <div class="input-group-append">
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="Procedencia">
                            <div class="input-group-append">
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="Unidad de Medida">
                            <div class="input-group-append">
                            </div>
                        </div>

                        <hr>
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

        <!--------------------------------------------------TABLA DE PEDIDOS------------------------------------------->
        <table class="table table-striped table-bordered -hover  table-responsive-md">
            <thead>
                <tr style="background-color: #DAF0D8">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Cantidad </th>
                    <th scope="col">Procedencia </th>
                    <th scope="col">Unidad de Medida </th>
                    <th scope="col">Editar </th>
                    <th scope="col">Eliminar </th>

                </tr>
            </thead>
            <!----------------------------------------------REGISTROS DE LA TABLA----------------------------------------------->
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Lechuga</td>
                    <td>Verdura</td>
                    <td>8</td>
                    <td>Mercado de Abastos</td>
                    <td>Piezas</td>
                    <td><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #CDD2CC; border: #000000; color: black;"><i class="far fa-edit"></i></button>
                    </td>
                    <td><button type="button" data-toggle="modal" data-target="#ModalDelete" class="btn btn-primary" style="background-color: #F3A697; border: #000000; color: black;"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>Pechuga de pollo</td>
                    <td>Carne</td>
                    <td>3,500 kg</td>
                    <td>Sam's Club</td>
                    <td>Kilos</td>
                    <td><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #CDD2CC; border: #000000; color: black;"><i class="far fa-edit"></i></button>
                    </td>
                    <td><button type="button" data-toggle="modal" data-target="#ModalDelete" class="btn btn-primary" style="background-color: #F3A697; border: #000000; color: black;"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td>Mil Islas</td>
                    <td>Adereso</td>
                    <td>15</td>
                    <td>Distribuidor</td>
                    <td>Piezas</td>
                    <td><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #CDD2CC; border: #000000; color: black;"><i class="far fa-edit"></i></button>
                    </td>
                    <td><button type="button" data-toggle="modal" data-target="#ModalDelete" class="btn btn-primary" style="background-color: #F3A697; border: #000000; color: black;"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>

    </div>
    </tbody>
    </table>
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