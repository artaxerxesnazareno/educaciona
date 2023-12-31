
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/ajuste.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../css/owl.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>
<?php
session_start();

use Artaxerxes\Educaciona\app\models\CursoDAO;
use Artaxerxes\Educaciona\app\models\UserDAO;
require '../../../autoloader.php';
$id = $_GET['id'];
$firstClass = CursoDAO::getCursosAllAula($id);
$curso = CursoDAO::getCurso($id);

?>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                    <img src="../assets/images/logo.png" alt="logo Educaciona" style="width: 150px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="cursos.php">Cursos</a></li>
                        <li><a href="profile.php">Profile <img src="../assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-4">
                      <?php
                    echo '<img src="../assets/images/capas/'.$curso->getCapa().'" alt="" style="border-radius: 23px;">';
                    ?>
                  </div>
                  <div class="col-lg-8">
                    <div class="thumb">
                        <div class="video-container">
                            <!-- código de incorporação do YouTube aqui -->
                            <?php
                            $c =$firstClass->getFirstAula();
                            echo $c->getLink();
                            ?>
                        </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                  <?php
                echo '<h2> Curso de '.$curso->getNome().' Detalhes</h2>';
                ?>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="left-info">
                        <div class="left">
                       <?php
                          echo '<h4>'.$curso->getNome().'</h4>
                          <span>'.$curso->getNivel().'</span>
                        </div>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i>  '.CursoDAO::getTotalInscritos($curso->getId()).'</li>
                        </ul>';
                          ?>
                      </div>
                    </div>
                    <div class="col-lg-6">
                   <!--   <div class="right-info">
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                          <li><i class="fa fa-video-camera" aria-hidden="true"></i> Nº Aulas</li>
                          <li><i class="fa fa-crosshairs" aria-hidden="true"></i> Categoria</li>
                        </ul>
                      </div>-->
                    </div>
                    <div class="col-lg-12">
                     <?php
                      echo '<p>'.$curso->getDescricao().'</p>';
                      ?>
                    </div>
                    <div class="col-lg-12">
                      <div class="main-border-button">
                       <?php
                       if (UserDAO::userIsInscrio($_SESSION['user_id'], $curso->getId())){
                           echo '<a href="./curso.php?id=' . $curso->getId() . '">Ver Curso</a>';
                       }else {
                           echo '<a href="../../app/controllers/userController.php?id=' . $curso->getId() . '">Inscrever-se</a>';
                       }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->

          <!-- ***** Other Start ***** -->
       <!--   <div class="other-games">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Other Related</em> Games</h4>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../assets/images/game-01.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../assets/images/game-02.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../assets/images/game-03.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../assets/images/game-02.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../assets/images/game-03.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../assets/images/game-01.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>-->
          <!-- ***** Other End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>  Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="../js/isotope.min.js"></script>
  <script src="../js/owl-carousel.js"></script>
  <script src="../js/tabs.js"></script>
  <script src="../js/popup.js"></script>
  <script src="../js/custom.js"></script>


  </body>

</html>
