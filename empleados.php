<?php
include "Config/Conexion.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecake</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- notificaciones -->
    <link rel="stylesheet" href="assets/vendors/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <!-- icono mostrar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo3.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menú</li>

                        <li class="sidebar-item  ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Tablero</span>
                            </a>
                        </li>

                        <li class="sidebar-item active ">
                            <a href="empleados.php" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Empleados</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bi bi-envelope bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Correos</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No hay correos nuevos</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notificaciones</h6>
                                        </li>
                                        <li><a class="dropdown-item">No hay notificaciones</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">Administrador</h6>
                                            <p class="mb-0 text-sm text-gray-600">@Admin</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, Administrador!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> Mi
                                            Cuenta</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                            Configuraciones</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Empleados</h3>
                                <p class="text-subtitle text-muted">Mostrar y Registrar empleados</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Tablero</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Empleados
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#completeModal">
                                    Añadir empleado
                                </button>
                            </div>


                            <!--Form Modal Ingresar-->
                            <div class="modal fade text-left" id="completeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Añadir empleado</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="#">
                                            <div class="modal-body">
                                                <div class="form-group has-icon-left">
                                                    <label for="Id-icon">ID</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="#" id="Id-icon">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-key"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-icon-left">
                                                    <label for="Nombre-icon">Nombre</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Juan Carlos" id="Nombre-icon" maxlength="50">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-icon-left">
                                                    <label for="Apellido-icon">Apellido</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Perez Soza" id="Apellido-icon" maxlength="50">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group has-icon-left">
                                                    <label for="Correo-icon">Correo</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="jose145@gmail.com" id="Correo-icon" maxlength="75">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group has-icon-left">
                                                    <label for="Contraseña-icon">Contraseña</label>
                                                    <div class="position-relative">
                                                    <div class="input-group">
                                                        <input type="Password" id="Contraseña-icon" maxlength="25" placeholder="************" Class="form-control">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-lock"></i>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                            <div class="form-group has-icon-left">
                                                <label for="admin-icon">Administrador</label>
                                                <div class="position-relative">
                                                    <label class="switch">
                                                        <input type="checkbox" id="admin-icon">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" onclick="Limpiar()">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Cancelar</span>
                                        </button>
                                        <button type="button" class="btn btn-primary ml-1" onclick="validarCampos()">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Registrar</span>
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--Form Modal Modificar-->
                        <div class="modal fade text-left" id="ModificarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Modificar empleado</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="#">
                                        <div class="modal-body">
                                            <div class="form-group has-icon-left">
                                                <label for="mod-Id-icon">ID</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="#" id="mod-Id-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-key"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-icon-left">
                                                <label for="mod-Nombre-icon">Nombre</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Juan Carlos" id="mod-Nombre-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-icon-left">
                                                <label for="mod-Apellido-icon">Apellido</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Perez Soza" id="mod-Apellido-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group has-icon-left">
                                                <label for="mod-Correo-icon">Correo</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="jose145@gmail.com" id="mod-Correo-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group has-icon-left">
                                                <label for="mod-Contraseña-icon">Contraseña</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="************" id="mod-Contraseña-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" onclick="LimpiarMod()" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Cancelar</span>
                                            </button>
                                            <button type="button" class="btn btn-primary ml-1" onclick="validarCamposMod()">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Modificar</span>
                                            </button>
                                            <input type="hidden" id="hiddendata">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div id="tablaMostrar"></div>
                        </div>
                </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Ecake</p>
                    </div>
                    <div class="float-end">
                        <p>Creado con mucho <span class="text-danger"><i class="bi bi-heart"></i></span> para <a href="https://github.com/JosDCZ/Pasteleria">ti</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/extensions/sweetalert2.js"></script>
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <!-- AJAX mio -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script type="text/javascript">
        function mostrarPassword() {
            var cambio = document.getElementById("Contraseña-icon");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }

        $(document).ready(function() {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function() {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
    </script>

    <script src="assets/js/main.js"></script>

    <script>
        var pasar = "algo";

        $(document).ready(function() {
            MostrarDatos();
        });

        function MostrarDatos() {
            var MostrarDatos = "true";
            $.ajax({
                url: "Controller/ControllerEmpleado.php",
                type: 'POST',
                data: {
                    MostrarSend: MostrarDatos
                },
                success: function(data, status) {
                    $('#tablaMostrar').html(data);
                }
            });
        }

        function soloLetras(texto) {
            var regex = /^[a-zA-Z ]+$/;
            return regex.test(texto);
        }

        function soloNumeros(texto) {
            var regex = /^([0-9])*$/;
            return regex.test(texto);
        }

        function soloCorreo(texto) {
            var regex = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;
            return regex.test(texto);
        }

        function soloContrasena(texto) {
            var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
            return regex.test(texto);
        }

        function validarCampos() {

            var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;

            var IdAdd = $('#Id-icon').val();
            var NombreAdd = $('#Nombre-icon').val();
            var ApellidoAdd = $('#Apellido-icon').val();
            var CorreoAdd = $('#Correo-icon').val();
            var ContraseñaAdd = $('#Contraseña-icon').val();

            if (NombreAdd.length < 3) {
                toastify("Campo Nombre vacio", 2);
                $('#Nombre-icon').focus();
                $('#Nombre-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (soloLetras(NombreAdd) == false) {
                toastify("Ingrese solo letras en el campo Nombre", 2);
                $('#Nombre-icon').focus();
                $('#Nombre-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (ApellidoAdd.length < 3) {
                toastify("Campo Apellido vacio", 2);
                $('#Nombre-icon').css("background", "#fff");
                $('#Apellido-icon').focus();
                $('#Apellido-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (soloLetras(ApellidoAdd) == false) {
                toastify("Ingrese solo letras en el campo Apellido", 2);
                $('#Nombre-icon').css("background", "#fff");
                $('#Apellido-icon').focus();
                $('#Apellido-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (CorreoAdd.length < 3 && !reg.test(CorreoAdd)) {
                toastify("Ingrese un correo correcto", 2);
                $('#Apellido-icon').css("background", "#fff");
                $('#Correo-icon').focus();
                $('#Correo-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (soloCorreo(CorreoAdd) == false) {
                toastify("Ingrese un correo correcto", 2);
                $('#Apellido-icon').css("background", "#fff");
                $('#Correo-icon').focus();
                $('#Correo-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (ContraseñaAdd.length < 3) {
                toastify("Ingrese una contraseña correcta", 2);
                $('#Correo-icon').css("background", "#fff");
                $('#Contraseña-icon').focus();
                $('#Contraseña-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (soloContrasena(ContraseñaAdd) == false) {
                toastify("Ingrese una contraseña de acuerdo a las politicas\n\n- Minimo 8 caracteres\n- Maximo 15 caracteres\n- Al menos una letra mayúscula\n- Al menos una letra minuscula\n- Al menos un dígito\n- No espacios en blanco\n- Al menos 1 caracter especial", 2);
                $('#Correo-icon').css("background", "#fff");
                $('#Contraseña-icon').focus();
                $('#Contraseña-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else {
                Agregar();
            }
        }

        function validarCamposMod() {

            var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;

            var IdAdd = $('#mod-Id-icon').val();
            var NombreAdd = $('#mod-Nombre-icon').val();
            var ApellidoAdd = $('#mod-Apellido-icon').val();
            var CorreoAdd = $('#mod-Correo-icon').val();
            var ContraseñaAdd = $('#mod-Contraseña-icon').val();

            if (IdAdd.length < 1) {
                toastify("Ingrese un id correcto", 2);
                $('#mod-Id-icon').focus();
                $('#mod-Id-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (NombreAdd.length < 3) {
                toastify("Ingrese un nombre correcto", 2);
                $('#mod-Id-icon').css("background", "#fff");
                $('#mod-Nombre-icon').focus();
                $('#mod-Nombre-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (ApellidoAdd.length < 3) {
                toastify("Ingrese un apellido correcto", 2);
                $('#mod-Nombre-icon').css("background", "#fff");
                $('#mod-Apellido-icon').focus();
                $('#mod-Apellido-icon').css("background", "#fb6e893b").fadeIn(3000);
            } else if (CorreoAdd.length < 3 && !reg.test(CorreoAdd)) {
                toastify("Ingrese un correo correcto", 2);
                $('#mod-Apellido-icon').css("background", "#fff");
                $('#mod-Correo-icon').focus();
                $('#mod-Correo-icon').css("background", "#fb6e893b").fadeIn(3000);

            } else if (ContraseñaAdd.length < 3) {
                toastify("Ingrese una contraseña correcta", 2);
                $('#mod-Correo-icon').css("background", "#fff");
                $('#mod-Contraseña-icon').focus();
                $('#mod-Contraseña-icon').css("background", "#fb6e893b").fadeIn(3000);

            } else {

                Editar();
            }
        }

        function Agregar() {
            var IdAdd = $('#Id-icon').val();
            var NombreAdd = $('#Nombre-icon').val();
            var ApellidoAdd = $('#Apellido-icon').val();
            var CorreoAdd = $('#Correo-icon').val();
            var ContraseñaAdd = $('#Contraseña-icon').val();
            var admin = 0;
            if ($('#admin-icon').is(':checked')) {
                admin = 1;
            }
            pasar = "Agregar";
            $.ajax({
                url: "Controller/ControllerEmpleado.php",
                type: 'POST',
                data: {
                    IdSend: IdAdd,
                    NombreSend: NombreAdd,
                    ApellidoSend: ApellidoAdd,
                    CorreoSend: CorreoAdd,
                    ContraseñaSend: ContraseñaAdd,
                    AdminSend: admin,
                    paso: pasar
                },
                success: function(data, status) {
                    //mostrar datos
                    var hecho = JSON.parse(data);
                    // console.log(hecho);
                    if (hecho === 1) {
                        Limpiar();
                        alertaSimple("¡Acción realizada!", "Registro guardado con exito", "success", "Hecho");
                        MostrarDatos();
                    } else {
                        alertaSimple("¡Acción Fallida!", "Registro no se pudo guardar", "error", "Vale");
                    }

                }
            });
        }

        function Eliminar(idEliminar) {
            pasar = "Borrar";
            $.ajax({
                url: "Controller/ControllerEmpleado.php",
                type: 'POST',
                data: {
                    eliminarSend: idEliminar,
                    paso: pasar
                },
                success: function(data, status) {
                    //mostrar datos
                    //console.log(status);   
                    MostrarDatos();
                }
            });
        }

        //onclick en los botonos de la tabla
        function MostrarEditar(idActualizar) {
            $('#hiddendata').val(idActualizar);
            pasar = "Actualizar";
            $.post("Controller/ControllerEmpleado.php", {
                idActualizar: idActualizar,
                paso: pasar
            }, function(data, status) {
                var id = JSON.parse(data);
                if (id == 0) {
                    alertaSimple("¡Acción Fallida!", "No se pudo Obtener datos", "error", "Vale");
                } else {
                    $('#mod-Id-icon').val(id.idempleado);
                    $('#mod-Nombre-icon').val(id.nombre);
                    $('#mod-Apellido-icon').val(id.apellido);
                    $('#mod-Correo-icon').val(id.correo);
                    $('#mod-Contraseña-icon').val(atob(id.contraseña));
                }

            });

            $('#ModificarModal').modal('show');
        }

        //onclick en el modal
        function Editar() {

            var modIdAdd = $('#mod-Id-icon').val();
            var modNombreAdd = $('#mod-Nombre-icon').val();
            var modApellidoAdd = $('#mod-Apellido-icon').val();
            var modCorreoAdd = $('#mod-Correo-icon').val();
            var modContraseñaAdd = $('#mod-Contraseña-icon').val();
            var idoculto = $('#hiddendata').val();
            pasar = "Actualizar";


            $.post("Controller/ControllerEmpleado.php", {
                modIdAdd: modIdAdd,
                modNombreAdd: modNombreAdd,
                modApellidoAdd: modApellidoAdd,
                modCorreoAdd: modCorreoAdd,
                modContraseñaAdd: modContraseñaAdd,
                idoculto: idoculto,
                paso: pasar
            }, function(data, status) {
                var hecho = JSON.parse(data);
                if (hecho === 1) {
                    LimpiarMod();
                    alertaSimple("¡Acción realizada!", "Registro modificado con exito", "success", "Hecho");
                    MostrarDatos();
                } else {
                    alertaSimple("¡Acción Fallida!", "Registro no se pudo actualizar", "error", "Vale");
                }
            });

        }

        function estadoAdmin(idestado) {
            console.log("id: " + idestado);
            var nombre = "";
            var apellido = "";
            pasar = "obtener";

            $.post("Controller/ControllerEmpleado.php", {
                idObteSend: idestado,
                paso: pasar
            }, function(data, status) {
                var id = JSON.parse(data);
                if (id == 0) {
                    alertaSimple("¡Acción Fallida!", "No se pudo Obtener datos", "error", "Vale");
                } else {
                    nombre = id.nombre;
                    apellido = id.apellido;
                }
            });

            var estadocheck = 0;
            pasar = "cambioEstadoAdmin";
            // Comprobar cuando cambia un checkbox
            $('input[type=checkbox]').on('change', function() {
                if ($(this).is(':checked')) {
                    estadocheck = 1;
                    console.log("Checkbox " + $(this).prop("id") + " (" + $(this).val() + ") => Seleccionado");
                } else {
                    estadocheck = 0;
                    console.log("Checkbox " + $(this).prop("id") + " (" + $(this).val() + ") => Deseleccionado");
                }

                if (estadocheck === 1) {
                    $.post("Controller/ControllerEmpleado.php", {
                        IdcambioSend: idestado,
                        paso: pasar,
                        estadoSend: estadocheck
                    }, function(data, status) {
                        var hecho = JSON.parse(data);
                        if (hecho === 1) {
                            MensajeEsquina("info", nombre + " " + apellido + " ahora es Administrador");
                            MostrarDatos();
                        } else {
                            MensajeEsquina("error", "Error al cambiar estado");
                        }
                    });
                } else {
                    $.post("Controller/ControllerEmpleado.php", {
                        IdcambioSend: idestado,
                        paso: pasar,
                        estadoSend: estadocheck
                    }, function(data, status) {
                        var hecho = JSON.parse(data);
                        if (hecho === 1) {
                            MensajeEsquina("warning", nombre + " " + apellido + " ya NO es Administrador");
                            MostrarDatos();
                        } else {
                            MensajeEsquina("error", "Error al cambiar estado");
                        }
                    });
                }
            });
        }

        function estadoActivo(idestado) {
            console.log("id capturado: " + idestado);
            var nombreA = "";
            var apellidoA = "";
            var estado = 0;
            pasar = "obtener";

            $.post("Controller/ControllerEmpleado.php", {
                idObteSend: idestado,
                paso: pasar
            }, function(data, status) {
                var idA = JSON.parse(data);
                if (idA == 0) {
                    alertaSimple("¡Acción Fallida!", "No se pudo Obtener datos", "error", "Vale");
                } else {
                    nombreA = idA.nombre;
                    apellidoA = idA.apellido;
                    estado = idA.estado;
                }
            });

            $.post("Controller/ControllerEmpleado.php", {
                IdcambioASend: idestado,
                paso: pasar,
            }, function(data, status) {
                var hecho = JSON.parse(data);

                if (hecho === 1) {

                    if (estado == 1) {
                        MensajeEsquina("warning", "Se cambio el estado de " + nombreA + " " + apellidoA + " a Inactivo");
                    } else {
                        MensajeEsquina("info", "Se cambio el estado de " + nombreA + " " + apellidoA + " a Activo");
                    }

                    MostrarDatos();
                } else {
                    MensajeEsquina("error", "Error al cambiar estado");
                }
            });

        }

        function Limpiar() {
            $('#Id-icon').val("");
            $('#Nombre-icon').val("");
            $('#Apellido-icon').val("");
            $('#Correo-icon').val("");
            $('#Contraseña-icon').val("");
            $('#completeModal').modal('hide');
            $('#Correo-icon').css("background", "#fff");
            $('#Nombre-icon').css("background", "#fff");
            $('#Apellido-icon').css("background", "#fff");
            $('#Contraseña-icon').css("background", "#fff");
            $('#Correo-icon').css("background", "#fff");
            $('#admin-icon').prop('checked', false);
        }

        function LimpiarMod() {
            $('#mod-Id-icon').val("");
            $('#mod-Nombre-icon').val("");
            $('#mod-Apellido-icon').val("");
            $('#mod-Correo-icon').val("");
            $('#mod-Contraseña-icon').val("");
            $('#ModificarModal').modal('hide');
            $('#mod-Correo-icon').css("background", "#fff");
            $('#mod-Nombre-icon').css("background", "#fff");
            $('#mod-Apellido-icon').css("background", "#fff");
            $('#mod-Contraseña-icon').css("background", "#fff");
            $('#mod-Correo-icon').css("background", "#fff");
        }


        function alertaSimple(titulo, texto, icono, boton) {
            swal.fire({
                title: titulo,
                text: texto,
                icon: icono,
                confirmButtonColor: '#fb4669',
                confirmButtonText: boton
            });
        }

        function confirEliminarEmpleado(idActualizar) {
            Swal.fire({
                title: '¿Desea Eliminar?',
                text: "¡No podra recuperar la información!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: "Cancelar",
                confirmButtonColor: '#6c757d',
                cancelButtonColor: '#dc3545',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: '¡Eliminado!',
                        text: 'Se elimino el registro con exito.',
                        icon: 'success',
                        confirmButtonColor: '#fb4669',
                        confirmButtonText: 'Hecho'
                    })
                    Eliminar(idActualizar);
                }
            })
        }



        function MensajeEsquina(icono, titulo) {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: icono,
                title: titulo
            })

        }

        function toastify(titulo, colornum) {
            let color = ["#dc3545", "#198754", "#fb4669"];
            Toastify({
                text: titulo,
                duration: 3000,
                destination: "#",
                newWindow: true,
                close: true,
                gravity: "bottom", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: color[colornum],
                },
                onClick: function() {} // Callback after click
            }).showToast();
        }
    </script>
</body>

</html>