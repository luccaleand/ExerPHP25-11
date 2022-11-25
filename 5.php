<?php 
$G =readline("DIGITE UM NUMERO!  ");

  if($G < 1 ){
    echo"não existe mês com esse numero.";}

    elseif($G > 12){
    echo $G, " não existe mês com esse numero.";
  }
    elseif($G == 1){
    echo $G, " Janeiro";
  }
    elseif($G == 2){
    echo $G, " Fevereiro";
  }
    elseif($G == 3){
    echo $G, " Março";
  }
    elseif($G == 4){
    echo $G, " Abril";
  }
    elseif($G == 5){
    echo $G, " Maio";
  }
    elseif($G == 6){
    echo $G, " junho";
  }
    elseif($G == 7){
    echo $G, " julho";
  }
    elseif($G == 8){
    echo $G, " Agosto";
  }
    elseif($G == 9){
    echo $G, " Setembro";
  }
    elseif($G == 10){
    echo $G, " Outubro";
  }
    elseif($G == 11){
    echo $G, " Novembro";
  }
    elseif($G == 12){
    echo $G, " Dezembro";
  }
?>
