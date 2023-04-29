<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>Educaciona</title>

  <!-- Bootstrap core CSS -->
  <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../css/fontawesome.css">
  <link rel="stylesheet" href="../css/templatemo-cyborg-gaming.css">
  <link rel="stylesheet" href="../css/owl.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
</head>

<body>
<?php
use Artaxerxes\Educaciona\app\models\CursoDAO;
require '../../../autoloader.php';

    $cursos = CursoDAO::getCursosAll();

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
            <a href="index.html" class="logo">
              <img src="../assets/images/logo.png" alt="logo educaciona">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Search End ***** -->
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="buscar curso" id='searchText' name="searchKeyword"
                  onkeypress="handle" />
                <i class="fa fa-search"></i>
              </form>
            </div>
            <!-- ***** Search End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.html" class="active">Home</a></li>
              <li><a href="browse.html">Cursos</a></li>
              <li><a href="details.php">Detalhes</a></li>
              <li><a href="streams.html">Streams</a></li>
              <li><a href="profile.php">Perfiel <img src="../assets/images/profile-header.jpg" alt=""></a></li>
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

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Bem-Vindo ao Educaciona</h6>
                  <h4><em>Embarque</em> Em Uma jornada de conhecimento e crescimento</h4>
                  <div class="main-button">
                    <a href="browse.html">Embarque Agora</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Mais Populares</em> Agora </h4>
                </div>
                <div class="row">
                    <?php
                    foreach($cursos as $curso) {
                        echo '<div class="col - lg - 3 col - sm - 6">
                    <a href="details.php?id='.$curso->getId().'">
                    <div class="item">
                      <img src="../assets/images/capas/'.$curso->getCapa().'" alt="">
                      <h4>'.$curso->getNome().'<br><span>'.$curso->getNivel().'</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i>4.8</li>
                        <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> '.CursoDAO::getTotalMatriculas($curso->getId()).'</li>
                      </ul>
                    </div>
                    </a>
                  </div>';
                    }
                    ?>

                  <!--<div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="../assets/images/popular-02.jpg" alt="">
                      <h4>HTML5 & CSS3<br><span>Intermediario</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="../assets/images/popular-03.jpg" alt="">
                      <h4>JavaScript<br><span>Basico</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>

                     esse icone vai representar o nº de pessoas formadas ou de alunos inscritos

                        <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="../assets/images/popular-04.jpg" alt="">
                      <h4>Python<br><span>Avançado</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>-->
                  
                  
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="browse.html">Descubra os Populares</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Minha Biblioteca</em> Cursos</h4>
                <!-- Essa area so estara visivel caso o aluno ja tenha se inscrevido em algum curso, verificar aparitir de uma global ou de um regitro do banco-->
              </div>
              <div class="item">
                <ul>
                  <li><img src="../assets/images/popular-01.jpg" alt="" class="templatemo-item"></li>
                  <li>
                    <h4>Java</h4><span>Basico</span>
                  </li>
                  <li>
                    <h4>Data de Inicio</h4><span>24/01/2023</span>
                  </li>
                  <li>
                    <h4>Horas de Estudo</h4><span>634 H 22 Mins</span>
                  </li>
                  <li>
                    <h4>Estado</h4><span>Completo</span>
                  </li>
                  <li>
                    <div class="main-border-button border-no-active"><a href="#">Ver Curso</a></div>
                  </li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="../assets/images/popular-02.jpg" alt="" class="templatemo-item"></li>
                  <li>
                    <h4>HTML5 & CSS3 </h4><span>INTERMEDIARIO</span>
                  </li>
                  <li>
                    <h4>Data de Inicio</h4><span>22/06/2036</span>
                  </li>
                  <li>
                    <h4>Horas Estudadas</h4><span>740 H 52 Mins</span>
                  </li>
                  <li>
                    <h4>Status</h4><span>Encurso</span>
                  </li>
                  <li>
                    <div class="main-border-button"><a href="#">Ver Curso</a></div>
                  </li>
                </ul>
              </div>
              
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.php">Ver Cursos da Minha Biblioteca</a>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

            <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>
            Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
          </p>
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