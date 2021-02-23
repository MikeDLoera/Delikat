<!DOCTYPE html>
<html lang="es-mx">

<head>
    <title>Pedidos - Delikat</title>
    <?php echo $this->include('head'); ?>
</head>

<body>
    <?php echo $this->include('navbar'); ?>
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
                <div class="modal-body" style="text-align: center;"> Se elimará el pedido seleccionado.
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

    <!--MODAL PARA AGRGEGAR/EDITAR PEDIDO-->
    <div class="pt-4 container">
        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #23a888; border: #23a888;  ">Nuevo Pedido</button>
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
                        <p class="font-weight-bolder">Pedido</p>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Cliente">
                            <div class="input-group-append">
                            </div>
                        </div>

                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Número de Mesa">
                            <div class="input-group-append">
                            </div>
                        </div>

                        <br>

                        <select class="custom-select">
                            <option selected>Restaurante</option>
                            <option value="1">Rappi</option>
                            <option value="2">Didi</option>
                            <option value="3">Menú Local</option>
                        </select>

                        <br>
                        <br>

                        <label for="start" class="font-weight-lighter">Fecha:</label>

                        <input type="date" id="start" name="trip-start" value="2021-02-04" min="2021-01-01" max="2999-12-31">


                        <hr>
                        <!------------------------SEPARACION DEL MODAL--------------------------->

                        <p class="font-weight-bolder">Detalles de pedido/Comidas</p>

                        <select class="custom-select">
                            <option selected>Ensaladas</option>
                            <option value="1">Paninis</option>
                            <option value="2">Hambuerguesas</option>
                            <option value="3">HotDogs</option>
                            <option value="3">Crepas_Saladas</option>
                        </select>

                        <br>
                        <br>


                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Comidas">
                            <div class="input-group-append">
                            </div>
                        </div>
                        <br>


                        <select class="custom-select">
                            <option selected>Extras</option>
                            <option value="1">Leche</option>
                            <option value="2">Arrachera</option>
                            <option value="3">extra</option>
                            <option value="3">extra</option>
                        </select>
                        <br>
                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Cantidad de extras">
                            <div class="input-group-append">
                            </div>
                        </div>
                        <hr>



                        <p class="font-weight-bolder">Detalles de pedido/Bebidas</p>

                        <select class="custom-select">
                            <option selected>Bebidas</option>
                            <option value="1">Tisanas</option>
                            <option value="2">Frappes</option>
                            <option value="3">Bebidas Calientes</option>
                        </select>

                        <br>
                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Bebidas">
                            <div class="input-group-append">
                            </div>
                        </div>

                        <br>


                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Extras">
                            <div class="input-group-append">
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Cantidad de extras">
                            <div class="input-group-append">
                            </div>
                        </div>

                        <br>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Total">
                            <div class="input-group-append">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" style="background-color: #23a888; border: #23a888;  ">Guardar
                            Cambios <i class="far fa-save"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> </br>

    <!--------------------------------------------------TABLA DE PEDIDOS------------------------------------------->
    <div class="container">
        <table class="table table-striped table-bordered -hover  table-responsive-md">
            <thead>
                <tr style="background-color: #DAF0D8">
                    <th scope="col">ID</th>
                    <th scope="col">Total</th>
                    <th scope="col">Número de mesa</th>
                    <th scope="col">Cliente </th>
                    <th scope="col">Fecha </th>
                    <th scope="col">Plataforma </th>
                    <th scope="col">Editar </th>
                    <th scope="col">Eliminar </th>
                    <th scope="col">Imprimir </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">1</th>
                    <td>500</td>
                    <td>3</td>
                    <td>Samir Ferrales</td>
                    <td>01/02/2021</td>
                    <td>Rappi</td>
                    <td><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #CDD2CC; border: #000000; color: black;"><i class="far fa-edit"></i></button>
                    </td>

                    <td><button type="button" data-toggle="modal" data-target="#ModalDelete" class="btn btn-primary" style="background-color: #F3A697; border: #000000; color: black;"><i class="far fa-trash-alt"></i></button></td>

                    <td><button type="button" class="btn btn-primary" style="background-color: #FCFFB0; border: #000000; color: black;"><i class="fas fa-print"></i> </button>
                    </td>
                    </td>
                </tr>

                <!----------------------------------------------REGISTROS DE LA TABLA----------------------------------------------->

                <tr>
                    <th scope="row">1</th>
                    <td>500</td>
                    <td>3</td>
                    <td>Samir Ferrales</td>
                    <td>01/02/2021</td>
                    <td>Rappi</td>
                    <td><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #CDD2CC; border: #000000; color: black;"><i class="far fa-edit"></i></button>
                    </td>

                    <td><button type="button" data-toggle="modal" data-target="#ModalDelete" class="btn btn-primary" style="background-color: #F3A697; border: #000000; color: black;"><i class="far fa-trash-alt"></i></button></td>

                    <td><button type="button" class="btn btn-primary" style="background-color: #FCFFB0; border: #000000; color: black;"><i class="fas fa-print"></i> </button>
                    </td>
                    </td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td>500</td>
                    <td>3</td>
                    <td>Samir Ferrales</td>
                    <td>01/02/2021</td>
                    <td>Rappi</td>
                    <td><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="background-color: #CDD2CC; border: #000000; color: black;"><i class="far fa-edit"></i></button>
                    </td>

                    <td><button type="button" data-toggle="modal" data-target="#ModalDelete" class="btn btn-primary" style="background-color: #F3A697; border: #000000; color: black;"><i class="far fa-trash-alt"></i></button></td>

                    <td><button type="button" class="btn btn-primary" style="background-color: #FCFFB0; border: #000000; color: black;"><i class="fas fa-print"></i> </button>
                    </td>

                    </td>
                </tr>

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