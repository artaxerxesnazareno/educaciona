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
    <link href="../../../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <?php

    use Artaxerxes\Educaciona\app\models\CursoDAO;
    use Artaxerxes\Educaciona\app\models\UserDAO;

    require_once '../../../../autoloader.php';
    $cursos = CursoDAO::getCursosAll();
    ?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../../views">
                            <img src="../../assets/images/logo.png" alt="Educaciona" style="width: 150px;" />
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
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
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
                    <img src="../../assets/images/logo.png" alt="Educaciona" style="width: 150px;" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li class="active">
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
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
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
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
                        <div class="row">
                            <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix" >
                                                <div class="icon  justify-content-center align-items-center">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div class="text">
                                                    <h2><?php echo UserDAO::getTotalUsuarios() ?></h2>
                                                    <span>Total de Alunos</span>
                                                </div>
                                            </div>

                                            <div class="overview-chart">
                                                <canvas id="widgetChart1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c2">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="fas fa-book"></i>
                                                </div>
                                                <div class="text">
                                                    <h2><?php echo CursoDAO::getTotalCursos() ?></h2>
                                                    <span>Total de Cursos</span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c3">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="fas fa-check-circle"></i>
                                                </div>
                                                <div class="text">
                                                    <h2><?php echo CursoDAO::totalUsuariosCompletaramQualquerCurso() ?></h2>
                                                    <span>Total de Cursos Concluídos</span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart3"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c4">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="fas fa-user-plus"></i>
                                                </div>
                                                <div class="text">
                                                    <h2><?php echo CursoDAO::getTotalInscritosTodosCursos() ?></h2>
                                                    <span>Total de Inscritos nos Cursos</span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart4"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DATA TABLE -->
                                    <h3 class="title-5 m-b-35">data table</h3>
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-left">
                                            <div class="rs-select2--light rs-select2--md">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">All Properties</option>
                                                    <option value="">Option 1</option>
                                                    <option value="">Option 2</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--sm">
                                                <select class="js-select2" name="time">
                                                    <option selected="selected">Today</option>
                                                    <option value="">3 Days</option>
                                                    <option value="">1 Week</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <button class="au-btn-filter">
                                                <i class="zmdi zmdi-filter-list"></i>filters
                                            </button>
                                        </div>
                                        <div class="table-data__tool-right">
                                            <a href="cadastrarCurso.html">
                                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                    <i class="zmdi zmdi-plus"></i>add curso
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>

                                                    <th>Capa</th>
                                                    <th>Nome</th>
                                                    <th>Categoria</th>
                                                    <th>Nível</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Loop através dos cursos e exibir as informações na tabela.
                                                foreach ($cursos as $curso) {
                                                    echo '<tr class="tr-shadow">';

                                                    echo '<td><img src="../../assets/images/capas/' . $curso->getCapa() . '"></td>';
                                                    echo '<td>' . $curso->getNome() . '</td>';
                                                    echo '<td>' . $curso->getCategoriaNome() . '</td>';
                                                    echo '<td>' . $curso->getNivel() . '</td>';
                                                    echo '<td>';
                                                    echo '<div class="table-data-feature">';
                                                    echo '<button class="item" data-toggle="tooltip" data-placement="top" title="Send">';
                                                    echo '<i class="zmdi zmdi-mail-send"></i>';
                                                    echo '</button>';
                                                    echo '<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">';
                                                    echo '<i class="zmdi zmdi-edit"></i>';
                                                    echo '</button>';
                                                    // Botão "Ver aulas" com a URL de listar aulas do curso
                                                    echo '<a href="lista_aulas.php?curso_id=' . $curso->getId() . '" class="item" data-toggle="tooltip" data-placement="top" title="Ver aulas">';
                                                    echo '<i class="zmdi zmdi-eye"></i>';
                                                    echo '</a>';

                                                    // Botão "Adicionar aula" com a URL de cadastro da aula
                                                    echo '<a href="cadastro_aula.php?curso_id=' . $curso->getId() . '" class="item" data-toggle="tooltip" data-placement="top" title="Adicionar aula">';
                                                    echo '<i class="zmdi zmdi-plus text-success"></i>';
                                                    echo '</a>';

                                                    // Botão "Delete" atualizado com a URL de deletar curso e cor vermelha
                                                    echo '<a href="../../../app/controllers/cursoController.php?deletarCurso&id=' . $curso->getId() . '" class="item text-danger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm(\'Tem certeza que deseja excluir este curso?\');">';
                                                    echo '<i class="zmdi zmdi-delete text-danger"></i>';
                                                    echo '</a>';

                                                    echo '<button class="item" data-toggle="tooltip" data-placement="top" title="More">';
                                                    echo '<i class="zmdi zmdi-more"></i>';
                                                    echo '</button>';
                                                    echo '</div>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                    echo '<tr class="spacer"></tr>';
                                                }
                                                ?>
                                            </tbody>


                                    </div>
                                    <!-- END DATA TABLE -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="../../../../vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="../../../../vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="../../../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="../../../../vendor/slick/slick.min.js">
        </script>
        <script src="../../../../vendor/wow/wow.min.js"></script>
        <script src="../../../../vendor/animsition/animsition.min.js"></script>
        <script src="../../../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="../../../../vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="../../../../vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="../../../../vendor/circle-progress/circle-progress.min.js"></script>
        <script src="../../../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="../../../../vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="../../../../vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="../../js/main1.js"></script>

</body>

</html>
<!-- end document-->