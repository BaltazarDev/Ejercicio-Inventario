<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/contenedor.css">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Cementos Cruz Azul</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <?php
                $busquedan = $_REQUEST['busqueda_nom'];
                if(empty($busquedan))
                {
                    header("location: index.php");
                }
            ?>
            <form action="buscar_material.php" method="get" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Busqueda por nombre" id="busqueda_nom" name="busqueda_nom" value="<?php echo $busquedan; ?>" requerid>
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit" class="btn btn-outline-info">Buscar</button>
            </form>
        </div>
    </nav>

</head>
<body>
    <br><br>
    <div class="container">
        <div>
            <h2>Lista de materiales<button type="button" onclick="location.href='form_agregar.php'" class="btn btn-info">Nuevo material</button></h2>
        </div>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">UNIDAD DE MEDIDA</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">TOTAL POR PRODUCTO</th>
                    <th scope="col">Acciones</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        buscarMaterial($_GET['busqueda_nom']);
                        function buscarMaterial($nom){
                        include 'conexion.php';
                        $sql = "SELECT * FROM materiales WHERE nombre like '%$nom%' ";
                        $resultado = $conn->query($sql) or die (mysqli_error($conn));                    
                        while($filas = $resultado->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>"; echo $filas['id']; echo "</td>";
                    echo "<td>"; echo $filas['nombre']; echo "</td>";
                    echo "<td>"; echo $filas['uMedida']; echo "</td>";
                    echo "<td>"; echo $filas['precio']; echo "</td>";
                    echo "<td>"; echo $filas['stock']; echo "</td>";
                    echo "<td>"; echo $filas['total']; echo "</td>";
                    echo "<td><a href='form_modificar.php?id=".$filas['id']."'> <button type='button' class='btn btn-outline-warning'> Modificar </button> </a></td>";
                    if($filas['stock']==0){
                        echo "<td><a href='eliminar.php?id=".$filas['id']."'> <button type='button' class='btn btn-outline-danger'> Eliminar </button> </a></td>";
                    }
                echo "</tr>";
                        }
                        mysqli_close($conn);
                    }
                    ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>