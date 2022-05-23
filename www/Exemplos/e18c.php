if ($a == $b)

== Igual
!= ou <> Diferente
< Menor
> Maior
<= Menor Igual
>= Maior Igual

<?php
$a = 1234;
$b = '1234';
echo '<br>';
if ($a == $b) {
    echo '$a e $b são iguais<br>';
} if ($a != $b) {
    echo '$a e $b são diferentes';
    echo '<br>';
}
?>

<?php
$c = 1234;
$d = '1234';
if ($c === $d) {
    echo '$c e $d são iguais e do mesmo tipo<br>';

}
else if ($c !== $d) {
    echo '$c e $d são de tipos diferentes';
}
?>
<?php
$e = 0;
echo "------------------------<br>";
if($e == FALSE) {
    echo '$e é falso';
    echo '<br>';
}
if ($e === FALSE) {
    echo '$e é FALSE e do tipo boolean';
}
if ($e === 0) {
    echo '$e é zero';
}
?>
