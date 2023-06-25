<?php

use Artaxerxes\Educaciona\app\models\CursoDAO;
use Artaxerxes\Educaciona\app\models\Curso;
use Artaxerxes\Educaciona\app\models\Aula;
require '../../../autoloader.php';



session_start();

//      Declarando funções da controler
function completarAula($idAula, $idCurso){
CursoDAO::completarAula($idAula,$_SESSION['user_id'] );
header('Location: ../../resources/views/curso.php?id='.$idCurso.'&aula='.($idAula +1));
}
function cadastrarCurso(){
    try {
        if (isset($_FILES['capaCurso']) && $_FILES['capaCurso']['error'] == 0) {
            $allowed_extensions = array('png', 'jpeg', 'jpg');
            $file_info = pathinfo($_FILES['capaCurso']['name']);
            $file_extension = strtolower($file_info['extension']);

            if (in_array($file_extension, $allowed_extensions)) {
                $upload_directory = '../../resources/assets/images/capas/';
                $new_file_name = uniqid() . '.' . $file_extension;

                if (move_uploaded_file($_FILES['capaCurso']['tmp_name'], $upload_directory . $new_file_name)) {
                    $nome_curso = $_POST['nomeCurso'];
                    $nivel_curso = $_POST['nivelCurso'];
                    $categoria_curso = $_POST['categoriaCurso'];
                    $descricao_curso = $_POST['descricaoCurso'];

                    // Armazene os dados do formulário no banco de dados ou em outro local conforme necessário.
                    $curso = new Curso($nome_curso, $descricao_curso);
                    $curso->setNivel($nivel_curso);
                    $curso->setCapa($new_file_name);
                    CursoDAO::saveCurso($curso);


//                    header("Location: ../../resources/views/dashboard/resultado.html?result=success");
                    header("Location: ../../resources/views/dashboard/index.php");
                    exit();
                } else {
                    throw new Exception('Erro ao mover o arquivo para o diretório destino.');
                }
            } else {
                throw new Exception('Tipo de arquivo não permitido.');
            }
        } else {
            throw new Exception('Nenhum arquivo enviado ou erro no envio.');
        }
    } catch (Exception $e) {
        header("Location: ../../resources/views/dashboard/resultado.html?result=error&message=" . urlencode($e->getMessage()));
        exit();
    }
}
function deletarCurso() {
    try {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = CursoDAO::deleteCurso($id);

            if ($result) {
                header("Location: ../../resources/views/dashboard/index.php?result=success");
                exit();
            } else {
                throw new Exception("Erro ao excluir o curso.");
            }
        } else {
            throw new Exception("ID do curso não fornecido.");
        }
    } catch (Exception $e) {
        header("Location: ../../resources/views/dashboard/resultado.html?result=error&message=" . urlencode($e->getMessage()));
        exit();
    }
}
function cadastrarAula()
{
    try {
        $curso_id = $_POST['cursoId'];
        $nome = $_POST['nomeAula'];
        $link = $_POST['linkAula'];
        $descricao = $_POST['descricaoAula'];


        $aula = new Aula($nome, $link, $descricao);
        CursoDAO::saveAula($aula, $curso_id);

        header("Location: ../../resources/views/dashboard/index.php");
        exit();
    } catch (Exception $e) {
        header("Location: ../../resources/views/dashboard/resultado.html?result=error&message=" . urlencode($e->getMessage()));
        exit();
    }
}
function deletarAula($aula_id)
{
    $curso_id = $_GET['curso_id'];
    $result = CursoDAO::deleteAula($aula_id);

    if ($result) {
        header("Location: ../../resources/views/dashboard/lista_aulas.php?curso_id=$curso_id");
        exit();
    } else {
        echo "Erro ao excluir a aula.";
    }
}


//      Chamada da função
if (isset($_GET['aula'])) {
    completarAula($_GET['aula'], $_SESSION['user_id']);
}
if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['cadastrarCurso'])) {
    cadastrarCurso();
}
if (($_SERVER['REQUEST_METHOD'] == 'GET') && isset($_GET['deletarCurso'])) {
    deletarCurso();
}
if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['cadastrarAula'])) {
    cadastrarAula();
}
if (isset($_GET['deletarAula'])) {
    deletarAula($_GET['deletarAula']);
}

?>