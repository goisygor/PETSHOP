<?php
session_start();
if(!$_SESSION['email']){
    header('Location: ../html/LoginCadastro.html');
    exit();
}