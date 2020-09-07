<?php 
    EliminarMaterial($_GET['id']);
    function EliminarMaterial($id) {
        include 'conexion.php';
        $sql = "DELETE FROM materiales WHERE id = '".$id."' ";
        $conn->query($sql) or die (mysqli_error($conn));
        mysqli_close($conn);
    }
?>

<script type="text/javascript">
    alert("Producto eliminado Corretcamente");
    window.location.href = 'index.php';
</script>