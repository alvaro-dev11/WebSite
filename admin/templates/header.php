
<?php

    // Validando si no existe el usuario
    // entonces enviarlo al login
    session_start();

    $url_base="http://localhost/CURSOS/PHP/SITIO%20WEB%20CON%20PHP%20Y%20MYSQL/admin/";

    if(!isset($_SESSION['usuario'])){
        header("location:" . $url_base . "login.php");
    }
?>

<!-- cabecera -->
<!doctype html>
<html lang="es">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <!-- DataTableJS -->
    <script type="text/javascript" charset="utf8" defer src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header></header>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="<?php echo $url_base;?>index.php" aria-current="page">Administrador <span class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/servicios/">Servicios</a>
                <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/portafolio/">Portafolio</a>
                <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/entradas/">Entradas</a>
                <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/equipo/">Equipo</a>
                <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/configuraciones/">Configuraciones</a>
                <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/usuarios/">Usuarios</a>
                <a class="nav-item nav-link" href="<?php echo $url_base;?>cerrar.php">Cerrar sesión</a>
            </div>
        </nav>
    </header>
    <main class="container">
        <br>

        <script type="text/javascript">
            <?php if(isset($_GET['mensaje'])){ ?>
            Swal.fire({
                icon:"success",
                title:"<?php echo $_GET['mensaje']; ?>"
            });
            <?php } ?>
        </script>