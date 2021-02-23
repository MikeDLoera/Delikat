    <!-------------------------------------------NAVBAR---------------------------------------------------------->
    <section id="nav-bar" style="background-color: #DFE0DF;">

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mr-auto p-2 "> <a> <img src="https://trello-attachments.s3.amazonaws.com/6008d9c358158c207dd3974c/60187278a4d6b62fde74f47b/8433234c31e10ddfd6291896b7a8d715/imageonline-co-whitebackgroundremoved_(2).png" width="70px"></a>
                </div>
            </div>

            <div class="col-9 d-lg-none pt-3" style="text-align: right; ">
                <i class="fas fa-bars fa-3x" data-toggle="collapse" data-target="#principal-menu"> </i>
            </div>
            <div class="p-md-4 col-sm-12 col-md-9">
                <div id="principal-menu" class="collapse">
                    <ul>
                        <?php if (session('rol') == 'Admin') {?>
                        <li data-toggle="collapse" data-target="#principal-menu"><a href="<?= base_url('reportes')?>">Reportes <i class="fas fa-chart-line"></i>
                            </a></li>
                            <?php }?>

                        <li data-toggle="collapse" data-target="#principal-menu"><a href="<?= base_url('pedidos')?>">Pedidos <i class="fab fa-wpforms"></i></a></li>

                        <?php if (session('rol') == 'Admin' || session('rol') == 'Capturista') {?>
                        <li data-toggle="collapse" data-target="#principal-menu"><a href="<?= base_url('clientes')?>">Clientes <i class="fas fa-user-friends"></i></a></li>
                        <?php }?>

                        <?php if (session('rol') == 'Admin') {?>
                        <li data-toggle="collapse" data-target="#principal-menu"><a href="<?= base_url('usuarios')?>">Usuarios <i class="fas fa-users"></i></a></li>
                        <?php }?>

                        <?php if (session('rol') == 'Admin' || session('rol') == 'Capturista') {?>
                        <li data-toggle="collapse" data-target="#principal-menu"><a href="<?= base_url('inventario')?>">Inventario <i class="fas fa-boxes"></i></a>
                        </li>
                        <?php }?>

                        <li data-toggle="collapse" data-target="#principal-menu"><a href="<?= base_url('login/logout')?>">Cerrar Sesión <i class="fas fa-sign-in-alt"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>