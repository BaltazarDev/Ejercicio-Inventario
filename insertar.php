<?php
    insertarMaterial($_POST['nombre'], $_POST['uMedida'], $_POST['precio'], $_POST['stock']);
    function insertarMaterial($nom, $uMe, $pre, $sto){
        include 'conexion.php';
        $sql = "INSERT INTO materiales (nombre, uMedida, precio, stock) VALUES ('".$nom."', '".$uMe."', '".$pre."', '".$sto."')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
    }
?>

<script type="text/javascript">
    alert("Producto añadido Corretcamente");
    window.location.href = 'index.php';
</script>