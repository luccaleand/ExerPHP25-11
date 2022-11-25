------calcular a media do aluno------
<?php
$B = readline("coloque a primeira nota ");
$C = readline("coloque a segunda nota ");
$D = readline("coloque a terceira nota ");

$notas = array ($B, $C, $D);


$media = array_sum($notas)/count($notas);
$media = number_format($media,"2",".","");

if($media>=6) {echo "APROVADO", $media;}
else {echo "REPROVADO ", $media;}
?>
