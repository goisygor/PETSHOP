<?php
session_start();
session_destroy();
header('Location: ../html/LoginCadastro.html');
exit();
?>