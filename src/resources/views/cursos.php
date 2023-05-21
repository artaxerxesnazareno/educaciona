<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <title>Cursos</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../css/owl.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
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
<div id="js-preloader" class="js-preloader loaded">
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
<header class="header-area header-sticky" style="">
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
                            <input type="text" placeholder="Type Something" id="searchText" name="searchKeyword"
                                   onkeypress="handle">
                            <i class="fa fa-search"></i>
                        </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="cursos.php">Cursos</a></li>
                        <li><a href="profile.php">Profile <img src="../assets/images/profile-header.jpg" alt=""></a>
                        </li>
                    </ul>
                    <a class="menu-trigger">
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

                    <div>
                        <div class="featured-games header-text">
                            <div class="heading-section">
                                <h4><em>Top</em> Cursos</h4>
                            </div>
                            <div class="owl-features owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-1528px, 0px, 0px); transition: all 0.25s ease 0s; width: 4584px;">
                                        <?php
                                        $cursos_ = CursoDAO::getTopCursos();
                                        foreach ($cursos_ as $curso) {
                                            echo ' <div class="owl-item cloned" style="width: 243px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="thumb">
                                                    <img src="../assets/images/capas/' . $curso->getCapa() . '" width="243" height="411.633" alt="">
                                                    <div class="hover-effect">
                                                        <h6> ' . CursoDAO::getTotalInscritos($curso->getId()) . ' Inscritos</h6>
                                                    </div>
                                                </div>
                                                <h4>' . $curso->getNome() . '<br></h4>
                                                <ul>
                                                    <li><i class="fa fa-star " style=" color: yellow"></i> 4.8</li>
                                                </ul>
                                            </div>
                                        </div>';
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev"><span
                                                aria-label="Previous">‹</span></button>
                                    <button type="button" role="presentation" class="owl-next"><span
                                                aria-label="Next">›</span></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
                <!-- ***** Featured Games End ***** -->

                <!-- ***** Live Stream Start ***** -->
                <div class="live-stream">
                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4><em>Cursos</em> Educaciona</h4>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($cursos as $curso) {
                            echo '<div class="col-lg-3 col-sm-6">
                             <a href="details.php?id=' . $curso->getId() . '">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/images/capas/' . $curso->getCapa() . ' " width="246" height="246" alt="">
                                    <div class="hover-effect">
                                        <div class="content">
                                            <div class="live">
                                                <a href="#">' . $curso->getNome() . '</a>
                                            </div>
                                            <ul>
                                                <li> <a href="details.php?id=' . $curso->getId() . '"><i class="fa fa-graduation-cap" aria-hidden="true"></i>  ' . CursoDAO::getTotalInscritos($curso->getId()) . '</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="down-content">


                                    <h4>' . $curso->getNome() . '</h4>
                                </div>
                            </div>
                            </a>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
                <!-- ***** Live Stream End ***** -->

            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

                    <br>Design: <a href="https://templatemo.com" target="_blank"
                                   title="free CSS templates">TemplateMo</a> Distributed By <a
                            href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
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


<script>
    (function () {
        var ws = new WebSocket('ws://' + window.location.host +
            '/jb-server-page?reloadMode=RELOAD_ON_SAVE&' +
            'referrer=' + encodeURIComponent(window.location.pathname));
        ws.onmessage = function (msg) {
            if (msg.data === 'reload') {
                window.location.reload();
            }
            if (msg.data.startsWith('update-css ')) {
                var messageId = msg.data.substring(11);
                var links = document.getElementsByTagName('link');
                for (var i = 0; i < links.length; i++) {
                    var link = links[i];
                    if (link.rel !== 'stylesheet') continue;
                    var clonedLink = link.cloneNode(true);
                    var newHref = link.href.replace(/(&|\?)jbUpdateLinksId=\d+/, "$1jbUpdateLinksId=" + messageId);
                    if (newHref !== link.href) {
                        clonedLink.href = newHref;
                    } else {
                        var indexOfQuest = newHref.indexOf('?');
                        if (indexOfQuest >= 0) {
                            // to support ?foo#hash
                            clonedLink.href = newHref.substring(0, indexOfQuest + 1) + 'jbUpdateLinksId=' + messageId + '&' +
                                newHref.substring(indexOfQuest + 1);
                        } else {
                            clonedLink.href += '?' + 'jbUpdateLinksId=' + messageId;
                        }
                    }
                    link.replaceWith(clonedLink);
                }
            }
        };
    })();
</script>
</body>

</html>
