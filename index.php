<?php include 'includes/connection.php';?>
<!DOCTYPE html>
  <html>
    <head>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <?php include 'includes/head.php'?>
    <title>Inicio</title>
    </head>

<body>
    <!--Header Area-->
    <header>
        <?php
        include 'includes/header.php';
        ?>
    </header>
    <!--/Header Area-->

    <!--Main Area-->
  <main>
  <div id="map" style="height: 600px; width: 100%" ></div>
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Cadastrar um novo ponto</a>       
   <!--form area-->           
    <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
          <div class="row">
            <div class="input-field col s6">
              <input id="address" type="text" name="address" class="validate">
             <label for="address">Digite o Endereço: (Rua, Numero, Cidade, Estado)</label>
              </div>
            </div>  
        <div class="row">  
          <div class="input-field col s6">
             <input id="name" type="text" name="address" class="validate">
             <label for="name">Digite um nome para o Endereço</label>
           </div>
     </div>
    </div>
    <div class="modal-footer">
    <button class="btn modal-close waves-light" id="send" type="button">Enviar<i class="material-icons right">send</i>
    </div>
  </div>
            <!--/form area-->
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

      <!--Scripts area-->
      <script src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

        <!-- Maps API Javascript -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnrEA3ouQCgLIcfL8UZ4u_15VaSLUVx2g&callback=initMap"></script>
        
        <!-- Caixa de informação -->
        <script src="js/infobox.js"></script>

        <!-- Arquivo de inicialização do mapa -->
        <script src="js/indexmap.js"></script>
        <script>
        document.getElementById("send").onclick = function(converteAddress){
        
        var name = document.getElementById("name").value;
         var address = document.getElementById("address").value;
         var geocoder = new google.maps.Geocoder();
         geocoder.geocode({address: address}, function(results, status) {
           if (status == google.maps.GeocoderStatus.OK) {
             lat = results[0].geometry.location.lat();
             lng = results[0].geometry.location.lng();

             SendUrl(name, address, lat, lng);
           } else {
             alert(address + ' not found');
           }
         });
   
       function SendUrl(name, address, lat, lng ){
        window.location = 'includes/cadPoint.php?name=' + name + '&address=' + address + '&lat=' + lat + '&lng=' + lng;
       }
       
        }
        
  </script>
      <script type="text/javascript"> 
      $( document ).ready(function(){
        $('.sidenav').sidenav();
        $('.modal').modal();
      });
      </script>
            <!-- /Scripts Area -->
    </body>
  </html>