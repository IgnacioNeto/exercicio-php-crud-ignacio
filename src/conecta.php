<?php
/* SCRIPT DE CONEXÃO AO SERVIDOR BANCO DE DADOS LOCAL*/
// $servidor = "localhost";
// $usuario = "root";
// $senha = "";
// $banco = "crud_escola_ignacio";

/* SCRIPT DE CONEXÃO AO SERVIDOR BANCO DE DADOS 000WebHost*/
$servidor = "localhost";
$usuario = "id19030174_ignacio";
$senha = "rpq%)VKx8%JrMBF(";
$banco = "id19030174_crud_escola_ignacio";

try {
    // Criando a conexão com o MySQL (API/Driver de conexão)
    $conexao = new PDO(
        "mysql:host=$servidor; dbname=$banco; charset=utf8",
        $usuario,
        $senha
    );

    // Habilita a verificação de erros
    $conexao->setAttribute(
        PDO::ATTR_ERRMODE, // constante de erros em geral
        PDO::ERRMODE_EXCEPTION // constante de exceções de erro
);

} catch(Exception $erro) {
    die("Erro: " .$erro->getMessage());
}
  // var_dump($conexao); // Teste (http://localhost/exercicio-php-crud-ignacio/src/conecta.php) para ver

?>