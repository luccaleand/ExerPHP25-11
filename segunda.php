-----Faça um programa PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores.------
<?php
$a = readline("coloque o primeiro valor ");
$b = readline("coloque o segundo valor ");
  if ($a < $b)
    {echo $a, ", " ,$b;} 
  else 
    {echo $b, ", " ,$a;}
?>
