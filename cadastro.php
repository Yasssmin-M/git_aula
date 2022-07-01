<?php

$login = $_POST['login'];
$senha = MD5 ($POST['senha']);
$connect = mysql_connect ('localhost','root','usbw');
$db = mysql_select_db('bancosite');

        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query ($query,$connect);

        if ($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!'); window.location.href='login.html'
            </script>";
            
         } else{
             echo"<script language='javascript' type='text/javascript'>
             alert('Não foi possível cadastrar esse usuário'); window.location.href='cadastro.html'
             </script>";
         }

?>