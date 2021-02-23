    <!-------------------------------------------NAVBAR---------------------------------------------------------->
    <nav id="nav-bar" style="background-color: #DFE0DF;">

        <div class="container">
            <div class="row">
                <div class="col-3 col-md-2">
                    <div class="mr-auto p-2 ">
                        <a href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url('img/logo.png'); ?>" width="70px">
                        </a>
                    </div>
                </div>

                <?php if (session('rol') != null) { ?>
                    <div class="col-9 d-md-none pt-3" style="text-align: right; ">
                        <i class="fas fa-bars fa-3x" data-toggle="collapse" data-target="#principal-menu"> </i>
                    </div>

                    <div class="p-md-4 col-sm-12 col-md-10">
                        <div id="principal-menu" class="collapse">
                            <ul>
                                <?php if (rol(['Admin'])) { ?>
                                    <li data-toggle="collapse" data-target="#principal-menu">
                                        <a href="<?php echo base_url('reportes'); ?>">
                                            <i class="fas fa-chart-line"></i> Reportes
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if (rol(['Admin', 'Capturista', 'Mesero'])) { ?>
                                    <li data-toggle="collapse" data-target="#principal-menu">
                                        <a href="<?php echo base_url('pedidos'); ?>">
                                            <i class="fab fa-wpforms"></i> Pedidos
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if (rol(['Admin', 'Capturista'])) { ?>
                                    <li data-toggle="collapse" data-target="#principal-menu">
                                        <a href="<?php echo base_url('clientes'); ?>">
                                            <i class="fas fa-user-friends"></i> Clientes
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if (rol(['Admin'])) { ?>
                                    <li data-toggle="collapse" data-target="#principal-menu">
                                        <a href="<?php echo base_url('usuarios'); ?>">
                                            <i class="fas fa-users"></i> Usuarios
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if (rol(['Admin', 'Capturista'])) { ?>
                                    <li data-toggle="collapse" data-target="#principal-menu">
                                        <a href="<?php echo base_url('productos'); ?>">
                                            <i class="fas fa-boxes"></i> Productos
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if (rol(['Admin'])) { ?>
                                    <li data-toggle="collapse" data-target="#principal-menu">
                                        <a href="<?php echo base_url('movimientos'); ?>">
                                            <i class="fas fa-calculator"></i> Movimientos
                                        </a>
                                    </li>
                                <?php } ?>


                                <li data-toggle="collapse" data-target="#principal-menu">
                                    <a href="<?php echo base_url('login/logout'); ?>">
                                        <i class="fas fa-sign-in-alt"></i> Cerrar sesión
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </nav>


    <?php
    function rol(array $roles)
    {
        foreach ($roles as $i) {
            if (session('rol') == $i) {
                return true;
            }
        }
        return false;
    }
    ?>