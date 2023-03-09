<?php
  
  $idade =18;
  $cnh = true;
  $infra = 1;
  #quitacao = true;
  /*
  && e and VV
  || ou or VF
  */
  if($idade > 18 && $cnh == true) {
	  echo 'Pode dirigir!';
  } else{
	  echo 'Não pode dirigir, cavalo';
  }
  
  if($idade >= 23 && $infra == false){
	  echo "Pode faser a CNH D";
  }else {
	  echo "Você não pode fazer CNH D";
  }
  
  if(($idade >= 23 && $infra == false) || ($idade >= 23 && $quitacao == true )) {
      echo "<hr>Pode fazer a CNH D";
  } else {
	  echo "<hr> Você não pode fazer a CNH D";
  } 
  
  /*
   EXERCíCIO
 O motorista pode ter infrações porém casa esteja quitado,
ele poderá realizar a CNH D
  */
?>
