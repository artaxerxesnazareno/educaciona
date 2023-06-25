<?php

namespace Artaxerxes\Educaciona\app\models;

use Artaxerxes\Educaciona\app\models\Aula;
use Artaxerxes\Educaciona\app\models\Curso;
use Artaxerxes\Educaciona\config\Conexao;

//require '../../../autoloader.php';

class CursoDAO
{
    public static function getCurso($id)
    {
        $conn = Conexao::getInstance();

        $sql = "select cursos.*,ca.id as categoria_id, ca.nome as categoria_nome from cursos join categorias ca on ca.id = cursos.categoria_id WHERE cursos.id = $id";

        $result = mysqli_query($conn, $sql);

        $row = $result->fetch_assoc();

        $curso = new Curso($row["name"], $row["descricao"]);
        $curso->setId($row["id"]);
        $curso->setNivel($row['nivel']);
        $curso->setCapa($row['imagen_capa']);
        $curso->setCategoriaId($row['categoria_id']);
        $curso->setCategoriaNome($row['categoria_nome']);
//        $curso->setProgresso(self::progressoCurso($row['id']));
        return $curso;

    }

    public static function getCursosAllAula($id)
    {
        $conn = Conexao::getInstance();
        $sql = "select  a.id, a.nome as aula_nome, a.link, a.descricao as aula_decricao  from cursos c join aulas a ON c.id = a.curso_id where a.curso_id = '$id'";

        $result = mysqli_query($conn, $sql);

        $curso = self::getCurso($id);

        if ($result) {
            foreach ($result as $row) {

                $aula = new Aula($row['aula_nome'], $row['link']);
                $aula->setDescricao($row['aula_decricao']);
                $aula->setId($row['id']);

                $curso->addAula($row['id'], $aula);

            }
        }

        return $curso;

    }

    public static function getCursosAll()
    {
        try {

            $conn = Conexao::getInstance();
            $sql = "select cursos.*, c.nome as categoria_nome from cursos join categorias c on c.id = cursos.categoria_id";
            $result = mysqli_query($conn, $sql);
            $cursos = [];

            if ($result) {
                foreach ($result as $row) {
                    $curso = new Curso($row["name"], $row["descricao"]);
                    $curso->setId($row['id']);
                    $curso->setNivel($row['nivel']);
                    $curso->setCapa($row['imagen_capa']);
                    $curso->setCategoriaId($row['categoria_id']);
                    $curso->setCategoriaNome($row['categoria_nome']);
//                    $curso->setProgresso(self::progressoCurso($row['id']));
                    $cursos[] = $curso;
                }
            }

            return $cursos;
        } catch (mysqli_sql_exception $e) {
            echo "erro aqui" . print_r($e) . "";
        }
    }

    public static function getTotalInscritos($id)
    {
        $conn = Conexao::getInstance();
        $sql = "select count(*) as total_inscritos from inscritos where curso_id = $id ";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();

        return $row['total_inscritos'];
    }
    public static function completarAula($id, $id_user)
    {
        $conn = Conexao::getInstance();
        $sql_check = "SELECT * FROM `aulas_concluidas` WHERE `aula_id` = $id AND `user_id` = $id_user";
        $result_check = mysqli_query($conn, $sql_check);
        
        if (mysqli_num_rows($result_check) == 0) {
            $sql = "INSERT INTO `aulas_concluidas` (`aula_id`, `user_id`) VALUES ($id, $id_user)";
            try {
                $result = mysqli_query($conn, $sql);
                self::getCursosAll();
            } catch (DatabaseException $e) {
                // Handle the custom exception
                echo "Caught database exception: " . $e->getMessage();
            } catch (Exception $e) {
                // Handle other exceptions
                echo "Caught exception: " . $e->getMessage();
            }
        } else {
            echo "A combinação de aula_id e user_id já existe na tabela aulas_concluidas.";
        }
    }
    

    public static function progressoCurso($id, $id_user)
    {
        $conn = Conexao::getInstance();
        $sql1 = "select count(id) as total_aulas from aulas where curso_id ='$id'";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = $result1->fetch_assoc();
        $total_aulas = $row1['total_aulas'];

        //$sql2 = "select count(id) as completadas from aulas where curso_id ='$id' and completada = 1";
        $sql2 = "select count(ac.id) as total_aulas from aulas_concluidas ac join aulas a on a.id = ac.aula_id join cursos c on c.id = a.curso_id where c.id = '$id_user'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = $result2->fetch_assoc();
        $completadas = $row2['completadas'];

        $progresso = ($completadas / $total_aulas) * 100;
        return $progresso;
    }

    public static function getTopCursos()
    {
        $cursoTop = [];
        $conn = Conexao::getInstance();
        $sql = "select cursos.id, count(inscritos.curso_id) as total_inscritos from inscritos join cursos on cursos.id = inscritos.curso_id  group by cursos.id order by total_inscritos desc limit 5";
        $result = mysqli_query($conn, $sql);
        foreach ($result as $row) {
            $curso = self::getCurso($row['id']);
            $cursoTop[] = $curso;
        }
        return $cursoTop;
    }

    public static function getCursosByCategoria($categoria_id)
    {
        $conn = Conexao::getInstance();
        $sql = "select cursos.id from cursos  where cursos.categoria_id = '$categoria_id'";
        $result = mysqli_query($conn, $sql);
        $cursos = [];
        foreach ($result as $row) {
            $curso = self::getCurso($row['id']);
        }
        return $cursos;
    }

    public static function getCursosByUserId($user_id)
    {
        $conn = Conexao::getInstance();
        $sql = "SELECT t.curso_id FROM inscritos t join users on t.user_id = users.id WHERE users.id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        $cursos = [];
        foreach ($result as $row) {
            $curso = self::getCurso($row['curso_id']);
            $cursos[] = $curso;
        }
        return $cursos;
    }

    public static function saveCurso(Curso $curso)
    {
        $conn = Conexao::getInstance();

        $name = mysqli_real_escape_string($conn, $curso->getNome());
        $descricao = mysqli_real_escape_string($conn, $curso->getDescricao());
        $capa = mysqli_real_escape_string($conn, $curso->getCapa());
        $nivel = mysqli_real_escape_string($conn, $curso->getNivel());
        $categoriaID = mysqli_real_escape_string($conn, $curso->getCategoriaId());

        $sql = " INSERT INTO educacionaDB.cursos (name, descricao, imagen_capa, nivel, categoria_id) VALUES ('$name', '$descricao', ' $capa', '$nivel', 1)";
        $result = mysqli_query($conn, $sql);
    }
    public static function deleteCurso($id)
    {
        $conn = Conexao::getInstance();
        $id = mysqli_real_escape_string($conn, $id);

        // Deletar todas as aulas relacionadas ao curso
        $sqlAulas = "DELETE FROM aulas WHERE curso_id = '$id'";
        mysqli_query($conn, $sqlAulas);

        // Deletar o curso
        $sqlCurso = "DELETE FROM cursos WHERE id = '$id'";
        $result = mysqli_query($conn, $sqlCurso);

        // Retorna true se o curso foi excluído com sucesso, caso contrário, retorna false
        return $result;
    }
    public static function saveAula(Aula $aula, $curso_id)
    {
        $conn = Conexao::getInstance();

        $nome = mysqli_real_escape_string($conn, $aula->getNome());
        $link = mysqli_real_escape_string($conn, $aula->getLink());
        $descricao = mysqli_real_escape_string($conn, $aula->getDescricao());

        $sql = "INSERT INTO aulas (nome, link, descricao, curso_id) VALUES ('$nome', '$link', '$descricao', '$curso_id')";
        $result = mysqli_query($conn, $sql);
    }

    public static function deleteAula($aula_id)
    {
        $conn = Conexao::getInstance();

        // Crie a consulta SQL para excluir a aula
        $sql = "DELETE FROM aulas WHERE id = $aula_id";

        // Execute a consulta SQL
        $result = mysqli_query($conn, $sql);

        return $result;
    }

    public static function completouAula($id_user, $aula_id)
    {
        $conn = Conexao::getInstance();
        $sql = "SELECT COUNT(*) as total_aulas_concluidas FROM aulas_concluidas WHERE aula_id = $aula_id AND user_id = $id_user";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();

        return $row['total_aulas_concluidas'] > 0;
    }
    public static function getTotalCursos()
{
    $conn = Conexao::getInstance();
    $sql = "SELECT COUNT(*) AS total_cursos FROM cursos";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();

    return $row['total_cursos'];
}
public static function getTotalInscritosTodosCursos()
{
    $conn = Conexao::getInstance();
    $sql = "SELECT COUNT(*) AS total_inscritos FROM inscritos";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();

    return $row['total_inscritos'];
}

public static function calcularPorcentagemAulasCompletadas($id_user, $curso_id)
{
    $conn = Conexao::getInstance();

    // Obter o número total de aulas do curso
    $sqlTotalAulas = "SELECT COUNT(*) AS total_aulas FROM aulas WHERE curso_id = $curso_id";
    $resultTotalAulas = mysqli_query($conn, $sqlTotalAulas);
    $rowTotalAulas = $resultTotalAulas->fetch_assoc();
    $totalAulas = $rowTotalAulas['total_aulas'];

    // Obter o número de aulas completadas pelo aluno
    $sqlAulasCompletadas = "SELECT COUNT(*) AS aulas_completadas FROM aulas_concluidas WHERE user_id = $id_user AND aula_id IN (SELECT id FROM aulas WHERE curso_id = $curso_id)";
    $resultAulasCompletadas = mysqli_query($conn, $sqlAulasCompletadas);
    $rowAulasCompletadas = $resultAulasCompletadas->fetch_assoc();
    $aulasCompletadas = $rowAulasCompletadas['aulas_completadas'];

    // Calcular a porcentagem de aulas completadas
    $porcentagem = ( $aulasCompletadas / $totalAulas) * 100;

    
   

    // Retornar a porcentagem
    return $porcentagem;
}
public static function getTotalUsuariosInscritos()
{
    $conn = Conexao::getInstance();
    $sql = "SELECT COUNT(DISTINCT user_id) AS total_usuarios_inscritos FROM inscritos";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();

    return $row['total_usuarios_inscritos'];
}

public static function usuarioCompletouCurso($id_user, $curso_id)
{
    // Calcular a porcentagem de aulas completadas pelo usuário no curso
    $porcentagem = self::calcularPorcentagemAulasCompletadas($id_user, $curso_id);

    // Verificar se a porcentagem é igual a 100
    if ($porcentagem == 100) {
        return true;
    } else {
        return false;
    }
}



public static function totalUsuariosCompletaramQualquerCurso()
{
    $conn = Conexao::getInstance();

    // Obter todos os cursos
    $sqlCursos = "SELECT id FROM cursos";
    $resultCursos = mysqli_query($conn, $sqlCursos);

    $totalUsuariosCompletaramQualquerCurso = 0;
    $usuariosCompletaram = [];

    // Verificar se os usuários completaram algum dos cursos
    while ($rowCurso = $resultCursos->fetch_assoc()) {
        $curso_id = $rowCurso['id'];
        $sqlUsuariosInscritos = "SELECT user_id FROM inscritos WHERE curso_id = $curso_id";
        $resultUsuariosInscritos = mysqli_query($conn, $sqlUsuariosInscritos);

        while ($rowUsuario = $resultUsuariosInscritos->fetch_assoc()) {
            $id_user = $rowUsuario['user_id'];
            if (!in_array($id_user, $usuariosCompletaram) && self::usuarioCompletouCurso($id_user, $curso_id)) {
                $usuariosCompletaram[] = $id_user;
                $totalUsuariosCompletaramQualquerCurso++;
            }
        }
    }

    // Retornar o total de usuários que completaram qualquer curso
    return $totalUsuariosCompletaramQualquerCurso;
}

}
