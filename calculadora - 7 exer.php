<?php


$num1 = 0;
$num2 = 0;
$resultado = 0;
$calcular = 'somar';

if(isset($_GET['num1'],$_GET['num2'],$_GET['calcular'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET['calcular'];

switch($calcular){
       case 'somar';
        $resultado = $num1 + $num2;
        break;
       case 'subtrair';
        $resultado = $num1 - $num2;
        break;
       case 'multiplicar';
        $resultado = $num1 * $num2;
        break;
       case 'dividir';
        $resultado = $num1 / $num2;
        break;        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>

  <style>
    
  </style>



  
    <h1> nuemrooooossss <h1>
            <form>
                <input type="number" class="inputs" name="num1" required/>
                <br>
                <input type="number" class="inputs" name="num2" required/>
                <br>
                <input type="submit" value="calcular"/>

                <h4>escolha uma opção</h4>

                <select name="calcular">
                    <option value="somar">somar</option>
                    <option value="subtrair">subtrair</option>
                    <option value="dividir">dividir</option>
                    <option value="multiplicar">multiplicar</option>
                </select>
                <br>
                <br>
                <p>O resultado brabo é: <?= $resultado ?></p>
            </form>
</body>

</html>