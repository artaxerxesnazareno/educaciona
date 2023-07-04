<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
          media="all">
    <link href="../../../../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../css/custon.css" rel="stylesheet" media="all">

</head>

<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
<?php


use \Artaxerxes\Educaciona\app\models\CursoDAO;

require '../../../../autoloader.php';


$curso_id = $_GET['curso_id'];
$curso = CursoDAO::getCursosAllAula($curso_id);
$aulas = $curso->getAulas();
?>
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="../../views">
                        <img src="../../assets/images/logo.png" alt="Educaciona" style="width: 150px;">
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
            <ul class="list-unstyled navbar__list">
                <li>
                  <a  href="index.php"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="active">
                  <a href="cadastrarCurso.html"> <i class="fas fa-plus-circle"></i> Novo Curso</a>
                </li>
                <li>
                  <a> <i class="fas fa-chart-bar"></i> Relatório</a>
                </li>
              </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="../../views">
                <img src="../../assets/images/logo.png" alt="Educaciona" style="width: 150px;">
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1 ps">
            <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                  <a  href="index.php"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="active">
                  <a href="cadastrarCurso.html"> <i class="fas fa-plus-circle"></i> Novo Curso</a>
                </li>
                <li>
                  <a> <i class="fas fa-chart-bar"></i> Relatório</a>
                </li>
              </ul>
            </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search"
                                   placeholder="Search for datas &amp; reports...">
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                    <!-- DATA TABLE -->

                    <div class="container">
                        <h2>Aulas de <?php echo $curso->getNome(); ?></h2>
                        <img src="../../assets/images/capas/<?php echo $curso->getCapa(); ?>" alt="Capa do curso"
                             width="400">
                        <div class="table-responsive table-responsive-data2 ">
                            <table class="table table-data2 table-striped ">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th style="width: 300px;">Aula</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($aulas as $aula) {
                                    echo '<tr>';
                                    echo '<td>' . $aula->getNome() . '</td>';
                                    echo '<td><div class="responsive-iframe">' . $aula->getLink() . '</div></td>';
                                    echo '<td>';
                                    echo '<div class="table-data-feature">';
                                    echo '<a href="editar_aula.php?aula_id=' . htmlspecialchars($aula->getId()) . '" class="item" data-toggle="tooltip" data-placement="top" title="Editar">';
                                    echo '<i class="zmdi zmdi-edit"></i>';
                                    echo '</a>';
                                    // Adicione o símbolo '=' após 'deletarAula'
                                    echo '<a href="../../../app/controllers/cursoController.php?deletarAula=' . $aula->getId() . '&curso_id='.$curso_id.'" class="item text-danger" data-toggle="tooltip" data-placement="top" title="Deletar" onclick="return confirm(\'Tem certeza que deseja excluir esta aula?\');">';
                                    echo '<i class="zmdi zmdi-delete text-danger"></i>';
                                    echo '</a>';
                                    echo '</div>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>

                            </table></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
<!-- end document-->
