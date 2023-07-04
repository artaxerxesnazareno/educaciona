<?php
session_start();

use Artaxerxes\Educaciona\app\models\CursoDAO;
use Artaxerxes\Educaciona\app\models\User;
use Artaxerxes\Educaciona\app\models\UserDAO;

require '../../../autoloader.php';

$id = $_GET['id'];
$curso = CursoDAO::getCursosAllAula($id);
$curso = $curso->getNome();
$user_id = $_SESSION['user_id'];
$username = UserDAO::getUserName($user_id);
// Criar uma nova instância PDF
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Definir informações do documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Seu Nome');
$pdf->SetTitle('Certificado de Conclusão de Curso');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, exemplo, teste, guia');

// Definir cabeçalho e rodapé padrão
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Adicionar uma página
$pdf->AddPage();

// Definir o conteúdo da página
$html = <<<EOD
<div style="display: flex; justify-content: center; align-items: center; height: 100%;">
    <center>
        <h1 style="color: blue; font-size: 5em; font-weight: bold;">Certificado de Conclusão</h1>
        <h2 style="font-size: 2em;">Parabéns, $username </h2>
        <p style="font-size: 1.2em;">Você concluiu com sucesso o curso </p>
        <p style="font-size: 1.7em;"> $curso </p>
    </center>
</div>
EOD;




// Obtenha as dimensões da página
$pageWidth = $pdf->getPageWidth();
$pageHeight = $pdf->getPageHeight();

// Obtenha as dimensões da imagem
$imageWidth = 120; // a largura da imagem é definida como 40 unidades
$imageHeight = $pdf->getImageRBY(); // obter a altura da imagem

// Calcule as coordenadas x e y
$x = ($pageWidth - $imageWidth) / 2;
$y = ($pageHeight - $imageHeight) / 2;


// Carregar a imagem
$image = imagecreatefromjpeg("../assets/images/fundo-de-papel-de-espaco-de-design-texturizado.jpg");

// Definir a opacidade (0 a 127, 0 = totalmente opaco, 127 = totalmente transparente)
$opacity = 30;

// Criar uma nova imagem com opacidade reduzida
$transparentImage = imagecreatetruecolor($pageWidth, $pageHeight);
imagealphablending($transparentImage, false);
imagesavealpha($transparentImage, true);
$transparentColor = imagecolorallocatealpha($transparentImage, 0, 0, 0, $opacity);
imagefilledrectangle($transparentImage, 0, 0, $pageWidth, $pageHeight, $transparentColor);
imagecopy($transparentImage, $image, 0, 0, 0, 0, $pageWidth, $pageHeight);

// Salvar a imagem com opacidade reduzida
$transparentImagePath = "../assets/images/fundo-de-papel-de-espaco-de-design-texturizado-transparente.png";
imagepng($transparentImage, $transparentImagePath);

// Adicionar a imagem transparente ao PDF
$pdf->Image($transparentImagePath, 0, 0, $pageWidth, $pageHeight, 'PNG', '', '', false, 300, '', false, false, 1, false, false, false);

// Adicione a imagem no PDF
$pdf->Image("../assets/images/logo.png", $x, $y, $imageWidth, '', 'PNG', '', '', false, 300, '', false, false, 1, false, false, false);

// Gerar PDF
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, 'C', true);
$pdf->Output('certificado.pdf', 'I');

?>
