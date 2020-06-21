<?php
include_once 'connection.php';
$sql = "DELETE FROM pacientes WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: pac_index.php");
   exit();
} else {
    echo "Erro ao deletar: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
