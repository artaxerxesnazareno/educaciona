<?php

use Artaxerxes\Educaciona\app\models\CursoDAO;

require '../../../autoloader.php';

$curso = CursoDAO::getCursosAllAula(1);

echo "<h1>Cursos</h1>";
echo CursoDAO::getTotalMatriculas(2);

