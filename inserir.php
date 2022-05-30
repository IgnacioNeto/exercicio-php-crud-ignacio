<?php
require_once "src/funcoes-alunos.php";
$listaDeAlunos =lerAlunos($conexao);

if(isset($_POST['inserir'])){

    // Versão com filtro de sanitização (Melhor)
    // Capturando e limpando o que foi digitado no campo nome (Formulário)
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $primeira_nota = filter_input(INPUT_POST, 'primeira_nota', FILTER_SANITIZE_NUMBER_INT);
    $segunda_nota = filter_input(INPUT_POST, 'segunda_nota', FILTER_SANITIZE_NUMBER_INT);
    // $media = filter_input(INPUT_POST, 'media', FILTER_SANITIZE_NUMBER_INT);
    // $situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_SPECIAL_CHARS);

    // Chamando a função e passando os dados de conexão e o nome digitado
    inserirAluno($conexao, $nome, $primeira_nota, $segunda_nota);

    // Redirecionamento (Nada a ver com a Tag do HTML)
    header("location:listar.php");

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1>Cadastrar um novo aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>

	<form action="" method="post">
	    <p><label for="nome">Nome:</label>
	    <input type="text" name="nome" id="nome" required></p>
        
      <p><label for="primeira">Primeira nota:</label>
	    <input type="number" name="primeira_nota" id="primeira_nota" step="0.1" min="0.0" max="10" required></p>
	    
	    <p><label for="segunda">Segunda nota:</label>
	    <input type="number" name="segunda_nota" id="segunda_nota" step="0.1" min="0.0" max="10" required></p>
	    
      <button type="submit" name="inserir">Cadastrar aluno</button>
	</form>

    <hr>
    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>