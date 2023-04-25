<?php

namespace Artaxerxes\Educaciona\app\models;


use Artaxerxes\Educaciona\config\Conexao;
use Artaxerxes\Educaciona\app\models\Curso;
use Artaxerxes\Educaciona\app\models\Aula;

require '../../../autoloader.php';


class CursoDAO
{
static public  function getCurso($id)
    {
        $conn = Conexao::getInstance();

        $sql = "SELECT * FROM cursos WHERE id = $id";


        $result = mysqli_query($conn, $sql);

        $row = $result->fetch_assoc();


        $curso = new Curso($row["name"], $row["descricao"]);


        return $curso;

    }

    static public  function getCursosAllAula($id)
    {
        $conn = Conexao::getInstance();
        $sql = "select  a.nome as aula_nome, a.link   from cursos c join aulas a where a.curso_id = '$id'";

        $result = mysqli_query($conn, $sql);

        $curso = null;

        if ($result) {
            foreach ($result as $row) {

                $curso = self::getCurso($id);

                $aula = new Aula($row['aula_nome'], $row['link']);

                $curso->addAula($aula);

            }
        }
        return $curso;

    }
}