<?php include 'includes/connection.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <?php include 'includes/head.php'; ?>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <title>Ecopontos</title>
</head>
 
<body>
    <!--Header Area-->
   <header>
        <?php include 'includes/header.php';?>
    </header>
    <!--/Header Area-->

    <!--Main Area-->
    <main>
         <div id="mapa" style="height: 600px; width: 100%"></div>
    </main>
    <!--/Main Area-->
    <br/>
    <!--Footer Area-->
    <footer class="page-footer blue">
         <?php
         include 'includes/footer.php';
         ?>
        </footer>
    <!--/Footer Area-->



		<script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
        <!-- Maps API Javascript -->
        <script src="https://maps.googleapis.com/maps/api/js?key=[API_KEY]&callback=initialize"></script>
        
        <!-- Caixa de informação -->
        <script src="js/infobox.js"></script>
	
        <!-- Arquivo de inicialização do mapa -->
        <script src="js/ecomapa.js"></script>
        
        <script type="text/javascript"> 
        $( document ).ready(function(){
          $('.sidenav').sidenav();
        });
      </script>

    </body>
</html>
