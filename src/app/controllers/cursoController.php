<?php

use Artaxerxes\Educaciona\app\models\CursoDAO;
require '../../../autoloader.php';


$curso = CursoDAO::getCursosAllAula(1);
session_start();
$_SESSION['curso'] = $curso;
//echo json_encode($curso);
//echo var_dump($curso);

$c =$_SESSION['curso'];



var_dump($c);