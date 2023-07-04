<?php

require '../../../autoloader.php';
use Artaxerxes\Educaciona\app\models\CursoDAO;


//$firstClass = CursoDAO::getCursosAllAula(2);
$curso = CursoDAO::getCursosAll();
$progresso = CursoDAO::calcularPorcentagemAulasCompletadas(5,3);

//$cursos_ = CursoDAO::getCursosByUserId(5);
echo "<h1></br>Var_export</h1>";
echo '<pre>';
var_export($progresso);
echo '</pre>';

//
//echo "<h1></br>Json_code</h1>";
//json_encode(CursoDAO::getTopCursos());