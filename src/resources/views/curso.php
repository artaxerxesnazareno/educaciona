<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();

use Artaxerxes\Educaciona\app\models\CursoDAO;
use Artaxerxes\Educaciona\app\models\UserDAO;

require '../../../autoloader.php';
$id = $_GET['id'];

$curso = CursoDAO::getCursosAllAula($id);
if (isset($_GET['aula'])) {
    $aula_id = $_GET['aula'];
} else {
    $aula_id = $curso->getFirstAula()->getId();
}
//    $curso = CursoDAO::getCurso(5);


?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <?php
    echo '<title>' . $curso->getNome() . ' - ' . $curso->getAulaById($aula_id)->getNome() . ' </title>';
    ?>
    <!-- Bootstrap core CSS -->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../css/owl.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link href="../css/ajuste.css" rel="stylesheet">

    <!--

    TemplateMo 579 Cyborg Gaming

    https://templatemo.com/tm-579-cyborg-gaming

    -->
</head>

<body>

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
                        <img src="../assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                        <form id="search" action="#">
                            <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                   onkeypress="handle"/>
                            <i class="fa fa-search"></i>
                        </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php" >Home</a></li>
                        <li><a href="cursos.php" class="active">Cursos</a></li>
                        <li><a href="profile.php">Profile <img src="../assets/images/profile-header.jpg" alt=""></a>
                        </li>
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

                <!-- ***** Featured Games Start ***** -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="featured-games header-text">
                            <div class="heading-section">
                                <?php
                                echo '<h4><em>' . $curso->getNome() . '</em> ' . $curso->getAulaById($aula_id)->getNome() . '</h4>';
                                ?>
                            </div>
                            <div class="video-container">
                                <!-- código de incorporação do YouTube aqui -->
                                <?php
                                echo $curso->getAulaById($aula_id)->getLink();
                                ?>
                            </div>
                        </div>
                        <p style="color: white" class="mt-3">
                            <?php
                            echo $curso->getAulaById($aula_id)->getDescricao();
                            ?>
                        </p>
                        <div class="col-lg-12 mt-5">
                            <div class="main-border-button">
                                <a href="../../app/controllers/cursoController.php?id=<?php echo $curso->getId() ?>&aula=<?php echo $curso->getAulaById($aula_id)->getId() ?>"
                                   class="text-center" style="width: 100%;"> Concluir aula </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="top-downloaded">
                            <div class="heading-section">
                                <h4><em>Progresso</em> <?php echo $c = CursoDAO::calcularPorcentagemAulasCompletadas($curso->getId(), $_SESSION['user_id']) ?>%</h4>
                            </div>
                            <ul>
                                <?php
                                foreach ($curso->getAulas() as $aula) {
                                    echo '<li>
                                <a href="./curso.php?id='.$curso->getId().'&aula=' . $aula->getId() . '">
                                   <h5> <i class="fa fa-video-camera" aria-hidden="true"></i>

                                    <br/>' . $aula->getNome() . '</h5>

                                    <div class="download">';


                                    if (CursoDAO::completouAula($aula->getId(), $_SESSION['user_id'])) {
                                        echo '<i class="fa fa-check-circle" aria-hidden="true"></i>';
                                    } else {
                                        echo '<i class="fa fa-eye" ></i >';

                                    }

                                    echo '</div>
                                    </a>
                                </li>';
                                }
                                ?>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>© 2023 <a href="https://github.com/artaxerxesnazareno" target="_blank"><i class="fab fa-github" aria-hidden="true"></i>
                        Artaxerxes Nazareno</a> Todos os direitos reservados.

                    <br>Desenvolvido por: <a href="https://github.com/artaxerxesnazareno" target="_blank">Artaxerxes Nazareno.</a> Distribuído por <a
                            href="https://themewagon.com" target="_blank">GitHub Pages</a>
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
