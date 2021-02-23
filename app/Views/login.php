<!DOCTYPE html>
<html lang="es-mx">

<head>
    <title>Login - Delikat</title>
    <?php echo $this->include('componente/head'); ?>
    <script src="<?php echo base_url('js/modulo/login.js'); ?>"></script>
</head>

<body>
    <?php echo $this->include('componente/navbar'); ?>
    <!---->
    <section style="background-color: white; height: 15vh;">
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-4 d-flex justify-content-center ">
                <i class="fas fa-user fa-4x"></i>
            </div>
        </div>
        <div class=" col 12 pt-4 d-flex justify-content-center">
            <form action="<?php echo base_url('login/auth') ?>" method="POST" id="loginForm">
                <div class="form-group">
                    <input type="text" name="user" id="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="usuario">
                </div>
                <div class="form-group">

                    <input type="password" name="pass" id="pass" class="form-control" placeholder="contraseña">
                </div>

            </form>
        </div>

        <?php if (session('error')) { ?>
            <div class="row justify-content-center">
                <div class="col-10 col-sm-5 col-lg-4 col-xl-3">
                    <div class="alert alert-danger" role="alert">
                        <strong>Error!</strong> Usuario o contraseña inválidos.
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class=" col-12 d-flex justify-content-center">

            <button type="submit" class="btn btn-primary" style="background-color: 23A888; border-color: 23A888;" onclick="$('#loginForm').submit()">Iniciar sesión</button>
        </div>
    </div>

</body>

</html>