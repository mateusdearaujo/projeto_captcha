<?php
session_start();
header("Content-type: image/jpeg");

$n = $_SESSION['captcha'];

// Cria a imagem setando a largura e altura;
$imagem = imagecreate(185, 80);

// Define a cor de Background da imagem;
imagecolorallocate($imagem, 155, 89, 182);

// Define a cor da fonte;
$fontcolor = imagecolorallocate($imagem, 20, 20, 20);


// Insere o texto na imagem, seta a cor e seta a fonte;
imagettftext($imagem, 40, 0, 30, 55, $fontcolor, 'SpecialElite-Regular.ttf', $n);

// Cria um arquivo jpeg a partir da imagem, NULL exibe o arquivo direto;
imagejpeg($imagem, null, 100);
?>