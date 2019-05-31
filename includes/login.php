<?php
 include ("connection.php");
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

	  
      $sqlAdmin = mysqli_query($conn, "SELECT userID, userEmail FROM tbl_user WHERE userEmail = '$myusername' and userPassword = '$mypassword'")  or die ("Error: ".mysqli_error($conn));
	  $rowAdmin = mysqli_fetch_array($sqlAdmin,MYSQLI_ASSOC) ;
      $countAdmin = mysqli_num_rows($sqlAdmin);
      // If result matched $myusername and $mypassword, table row must be 1 row
	echo $countAdmin;
      if($countAdmin == 1){
           $_SESSION['userEmail'] = $myusername;
		 header("location: /projeto_integrador/informacoes.php");
	  }
	  else{
           echo "<script>alert('Senha ou Email Incorreto, tente novamente!');</script>";
           header("location: /projeto_integrador/login.php");
	  }
 
    }
   
	
 
 


?>