
<?php
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
                // ...

                header("Location: ../../resources/views/dashboard/resultado.html?result=success");
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
?>

