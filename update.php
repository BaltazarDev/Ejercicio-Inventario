<?php
ModificarMaterial($_POST['id_material'], $_POST['nombre'], $_POST['uMedida'], $_POST['precio'], $_POST['stock']);
function ModificarMaterial($id_mat, $nombre, $uMedida, $precio, $stock){
    include 'conexion.php';
    $sql = "UPDATE materiales SET nombre = '".$nombre."', uMedida = '".$uMedida."', precio = '".$precio."', stock = '".$stock."' WHERE id = '".$id_mat."' ";
    $conn->query($sql) or die ("Error al modificar".mysqli_error($conn));
    mysqli_close($conn);
}
?>

<script type="text/javascript">
    alert("Producto modificado Corretcamente");
    window.location.href = 'index.php';
</script>