<?php

require_once 'ex028b.php';

if(!isset($_GET['apagar']))  {
echo  $_POST['nome'];
   $key = array_search($_GET['apagar'],array_column($_SESSION['cadastro'],'Nome'));
   array_splice($_SESSION['cadastro'] , ($key), 1);

   // header('Location: ex028b.php');
}
