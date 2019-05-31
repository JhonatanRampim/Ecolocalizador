<?php 
require("connection.php");
if (null==($name = $_GET['name'])){
    echo "<script>alert('Digite o endereço e o nome do local');</script>";
    echo "<script>location.href='/projeto_integrador/index.php';</script>";
}
else{
    $name = $_GET['name'];
    $address = $_GET['address'];
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];

    $sql = "INSERT INTO tbl_markers (name, address, lat, lng) VALUES ('$name','$address', '$lat', '$lng')";
    $resultado = mysqli_query($conn, $sql) or die ("Error: ".mysqli_error($conn));
    echo "<script>location.href='/projeto_integrador/index.php';</script>";
}
?>