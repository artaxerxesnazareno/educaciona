<?php
require '../../../autoloader.php';
require '../../../vendor/autoload.php';

use Artaxerxes\Educaciona\app\models\UserDAO;
// Referência ao namespace Dompdf
use Dompdf\Dompdf;

session_start();
$_SESSION['user_id'];

$curso = $_GET['curso'];
$nome = UserDAO::getUserName($_SESSION['user_id']);
$data = date('d/m/Y');
$dompdf = new Dompdf();
$imagemUrl = "../assets/images/logo.png";
// Conteúdo HTML do certificado de conclusão
$html = "
<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Certificado de Conclusão de Curso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .certificado {
            width: 800px;
            padding: 20px;
            border: 1px solid #000;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .titulo {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }
        .nome {
            font-size: 18px;
            text-align: center;
            margin-bottom: 5px;
        }
        .curso {
            font-size: 16px;
            text-align: center;
            margin-bottom: 5px;
        }
        .data {
            font-size: 12px;
            text-align: center;
        }
        .imagem {
            width: 200px;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class='certificado'>
        <div class='titulo'>Certificado de Conclusão de Curso</div>
        <div class='nome'>$nome</div>
        <div class='curso'>$curso</div>
        <div class='data'>$data</div>
        <img src='$imagemUrl' alt='Certificado de Conclusão de Curso'>
       <p>Mensagem de Conclusão de Curso:

       Nós certificamos que $nome participou do curso $curso, com uma carga horária de (quantidade de horas). Durante o curso, o participante demonstrou um alto nível de compromisso e dedicação, contribuindo significativamente para o sucesso do evento.
       
       O curso abordou $curso e proporcionou ao participante oportunidades para desenvolver habilidades e conhecimentos específicos na área. Ao concluir o curso, o participante adquiriu uma compreensão sólida do assunto e aplicou os conhecimentos adquiridos em situações práticas.
       
       Ao finalizar o curso. Esperamos que o que foi aprendido durante o curso possa ser aplicado de maneira efetiva em futuros desafios e oportunidades.
       
       Agradecemos a participação ativa e dedicação do $nome e desejamos-lhe sucesso em suas futuras atividades.
       
       </p>
    </div>
</body>
</html>";

$dompdf->loadHtml($html);
$dompdf->setPaper("A4", "landscape");
$dompdf->render();

// Gerar e salvar o arquivo PDF
$dompdf->stream("certificado_conclusao_curso.pdf");
