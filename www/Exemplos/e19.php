<?php
$a = 11;
$b = 12;
if ($a > $b) {
  echo "a É maior que B b";  
} else {
  echo " a não é maior que B";
}
?>

<?php
$salario = 1212;
$tempo_servico = 12;
$tem_reclamacoes = false;
if ($salario > 1000){
  if($tempo_servico >= 12 ){
    if ($tem_reclamacoes != true){
      echo 'Parabéns voce sera promovido <br>';
    }
  }
}
