<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta content="" name="description">
        <meta content="SERVICO NACIONAL APRENDIZAJE          - SENA" name="author">
        <title>
            <?php echo NAME_SISINV; ?>
        </title>
        <!-- Custom fonts for this template-->
        <link href="<?php echo URL_SISINV;?>/MATERIAL_THEME/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL_SISINV;?>/css/custom.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    </head>
    <body class="bg-gradient-primary">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block ">
                                    <img src="<?php echo URL_SISINV?>img/planning.svg" class="text-center" >
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                           <?php !empty($datos['message']) ? print "<div class='alert alert-danger fade show' role='alert'>{$datos['message']}</div>": $datos = ['message' => ''];
                                          ?>  
                                            <h1 class="h4 text-gray-900 mb-4">
                                                INICIAR SESION
                                            </h1>
                                        </div>
                                        <form class="user" action="<?php echo URL_SISINV;?>Login/SignIn" method="POST"> 
                                            <div class="form-group">
                                                <input required aria-describedby="username" class="form-control form-control-user" id="USERNAME" placeholder="NOMBRE DE USUARIO" type="text" name="USERNAME">
                                                </input>
                                            </div>
                                            <div class="form-group">
                                                <input required class="form-control form-control-user" id="PASSWORD" placeholder="CONTRASEÑA" type="password" name="PASSWORD">
                                                </input>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input class="custom-control-input" id="customCheck" type="checkbox">
                                                        <label class="custom-control-label" for="customCheck">
                                                            Recordarme
                                                        </label>
                                                    </input>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-user btn-block" type="submit">
                                                LOGIN
                                            </button>
                                        </form>
                                        <hr>
                                            <div class="text-center">
                                                <a class="small" href="forgot-password.html">
                                                    Olvide mi contraseña?
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="register.html">
                                                    Crea una cuenta!
                                                </a>
                                            </div>
                                        </hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo URL_SISINV;?>/MATERIAL_THEME/vendor/jquery/jquery.min.js">
        </script>
        <script src="<?php echo URL_SISINV;?>/MATERIAL_THEME/vendor/bootstrap/js/bootstrap.bundle.min.js">
        </script>
        <!-- Core plugin JavaScript-->
        <script src="<?php echo URL_SISINV;?>/MATERIAL_THEME/vendor/jquery-easing/jquery.easing.min.js">
        </script>
        <!-- Custom scripts for all pages-->
        <script src="<?php echo URL_SISINV;?>/MATERIAL_THEME/js/sb-admin-2.min.js">
        </script>
    </body>
</html>
