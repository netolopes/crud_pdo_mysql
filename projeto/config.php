<?php
try {
    $conexao = new PDO("mysql:host=localhost;dbname=bd_crud_pdo", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "Erro na conexão:".$erro->getMessage();
}
  
// habilita todas as exibições de erros
//ini_set('display_errors', true);
//error_reporting(E_ALL);
 
?>