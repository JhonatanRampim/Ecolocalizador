<?php
include 'connection.php';
if(isset($_POST['title'])){
    $title = $_POST['title'];
    $publication = $_POST['publication'];

    $uploaddir = '/var/www/uploads/';
    $uploadfile = $uploaddir . $_FILES['userfile']['name'];
    print "<pre>";
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $_FILES['userfile']['name'])) {
        // Chame aqui um insert no banco de dados. 
        // Deve ser salvo na coluna do banco a seguinte informação: $uploaddir . $_FILES['userfile']['name'])
        print "O arquivo é valido e foi carregado com sucesso. Aqui esta alguma informação:\n";
        print_r($_FILES);
    } else {
        print "Possivel ataque de upload! Aqui esta alguma informação:\n";
        print_r($_FILES);
    }
    print "</pre>";

    
    
    $sql = "INSERT INTO tbl_info (title, publication) VALUES ('$title','$publication')";
    $resultado = mysqli_query($conn, $sql) or die ("Error: ".mysqli_error($conn));
    if($sql == true){
           echo "<script>";
           //echo "alert('cadastro feito com sucesso')";
           echo "window.location.href = '../informacoes.php';";
               echo "</script>";
           }
   }




?>