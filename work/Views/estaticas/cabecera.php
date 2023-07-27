
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Constructora EJ-Diego Fabrega</title>
    <link rel="stylesheet" href="<?php echo Ruta; ?>css/centrar.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-light bg-primary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-white">CKE Constructora</span>
  </div>
</nav>
<!--    MENU CON BOOTSTRAP   -->

<!--    MENU LATERAL -->

<main class="container-fluid pb-3 flex-grow-1 d-flex flex-column flex-sm-row overflow-auto w-100">
    <div class="row flex-grow-sm-1 flex-grow-0 w-100">
        <div class="col-sm-3 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3">
            <div class="bg-light border rounded-3 p-1 h-100 sticky-top">
                <h6 class="d-none d-sm-block text-muted">Menu De Tareas</h6>
                <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
                    <li class="nav-item">
                        <a href="<?php echo Ruta; ?>Home" class="nav-link px-2 text-truncate">
                            <i class="bi bi-house fs-4"></i>
                            <span class="d-none d-sm-inline">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Ruta; ?>Cliente" class="nav-link px-2 text-truncate">
                            <i class="bi bi-person-circle fs-4"></i>
                            <span class="d-none d-sm-inline">Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Ruta; ?>Empleado" class="nav-link px-2 text-truncate"><i class="bi bi-person-lines-fill fs-4"></i>
                            <span class="d-none d-sm-inline">Empleados</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo Ruta; ?>Empleo" class="nav-link px-2 text-truncate"><i class="bi bi-x-diamond-fill fs-4"></i>
                            <span class="d-none d-sm-inline">Empleos</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo Ruta; ?>Obra" class="nav-link px-2 text-truncate"><i class="bi bi-columns-gap fs-4"></i>
                            <span class="d-none d-sm-inline">Obras</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo Ruta; ?>Usuario" class="nav-link px-2 text-truncate"><i class="bi bi-people fs-4"></i>
                            <span class="d-none d-sm-inline">Usuarios</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo Ruta; ?>Usuario/CargaLogin" class="nav-link px-2 text-truncate"><i class="bi bi-box-arrow-in-left fs-4"></i>
                            <span class="d-none d-sm-inline">Login Usuario</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo Ruta; ?>Vehiculo" class="nav-link px-2 text-truncate"><i class="bi bi-truck fs-4"></i>
                            <span class="d-none d-sm-inline">Vehiculos</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo Ruta; ?>home/Registros" class="nav-link px-2 text-truncate"><i class="bi bi-table fs-4"></i>
                            <span class="d-none d-sm-inline">Registros</span> </a>
                    </li>
                </ul>
            </div>
        </div>
                    <!--   FIN DEL MENU LATERAL -->


        <!--    MENU PRINCIPAL -->
