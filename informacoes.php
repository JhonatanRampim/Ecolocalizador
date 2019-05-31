<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
 ?>
<!DOCTYPE html>
  <html>
    <head>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <?php include 'includes/head.php'?>
    <title>Informações</title>
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
          <div class="row">
            <div class="s12" style="margin-right: 3%; margin-left:1%;">
            <?php 
              include 'includes/connection.php';
                  $sqlConsulta = "SELECT * from tbl_info";
                      $result = mysqli_query($conn,$sqlConsulta) or die ("Error: ".mysqli_error($conn)) ;
                      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                      $PublicID = $row["PublicID"];
                      $title = $row["title"];
                      $publication = $row["publication"];

                            echo "<div class='col s12 m12 l6 xl6 left-align'>";
                            echo  "<div class='card blue lighten-3'>";
                            echo "<div class='card-image'>";
                            echo "<img src='images/lixo_destacada.jpg'>";
                            echo "<span class='card-title'>$PublicID-$title</span>";
                            echo "</div>";
                                  echo "<div class='card-action'>";
                                    echo "<p class='justificado'>";
                                    echo nl2br($publication);
                                    echo "</p>";
                                  echo "</div>";
                                echo "</div>";
                              echo "</div>";
                    

              }
              echo "</div>";
              ?>
            </div>
            </div>
          <div id="button-alterar-info">
            <?php
             if(isset($_SESSION['userEmail'])){
              echo "<a class='waves-effect waves-light btn modal-trigger' href='#modal1'><i class='material-icons left'>info</i>Cadastrar informações</a>";
             }
            ?>
            </div>
            <!--form area-->           
          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Cadastre abaixo informações sobre Lixo:</h4>
                  <div class="row">
                    <form class="col s12" method="POST" action="includes/cadPublic.php">
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="title" type="text" name="title" class="validate">
                          <label for="title">Digite o Título</label>
                        </div>
                      </div>
                      <div class="row">  
                        <div class="input-field col s6">
                        <textarea id="textarea1" name="publication" class="materialize-textarea"></textarea>
                        <label for="textarea1">Insira as Informações</label>
                        </div>
                      </div>

                  </div>
                 
              </div>
            <div class="modal-footer">
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar<i class="material-icons right">send</i>
            </form>
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
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript"> 
      $( document ).ready(function(){
        $('.sidenav').sidenav();
        $('.modal').modal();
      });
      </script>
      <!-- /Scripts Area -->
    </body>
  </html>