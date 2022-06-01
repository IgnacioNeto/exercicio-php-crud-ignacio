<?php
require_once "src/funcoes-alunos.php";

// Pegando o valor do id e sanitizando
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Criação da variável $produto para guardar o valor recebido da função
$aluno = lerUmAluno($conexao, $id);

// Para teste parcial (Quando clicar em atualizar)
// dump($aluno);

if(isset($_POST['atualizar'])){

    // Versão com filtro de sanitização (Melhor)
    // Capturando e limpando o que foi digitado no campo nome (Formulário)
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $primeira_nota = filter_input(INPUT_POST, 'primeira_nota', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $segunda_nota = filter_input(INPUT_POST, 'segunda_nota', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    // Chamando a função e passando os dados de conexão e o nome digitado

    $media= calculaMedia($primeira_nota, $segunda_nota);
    $situacao= calculaSituacao($media);

// ________________________(Verificar se precisa sanitizar)

    // $media = filter_input(INPUT_POST, 'media', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    // $situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_SPECIAL_CHARS);

    // $media = filter_input(INPUT_POST, $media, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    // $situacao = filter_input(INPUT_POST, $situacao, FILTER_SANITIZE_SPECIAL_CHARS);

    // Chamando a função e passando os dados de conexão e o nome digitado
    atualizarAluno($conexao, $id, $nome, $primeira_nota, $segunda_nota, $media, $situacao);

    // Redirecionamento (Nada a ver com a Tag do HTML)
    header("location:visualizar.php");

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Atualizar dados do aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>

    <form action="#" method="post">
        
	    <p><label for="nome">Nome:</label>
	    <input value="<?=$aluno['nome']?>" type="text" name="nome" id="nome" required></p>
        
        <p><label for="primeira">Primeira nota:</label>
	    <input value="<?=$aluno['primeira_nota']?>" name="primeira_nota" type="number" id="primeira" step="0.1" min="0.0" max="10" required oninput="pegarNota()"></p>

        <p><label for="segunda">Segunda nota:</label>
	    <input value="<?=$aluno['segunda_nota']?>" name="segunda_nota" type="number" id="segunda" step="0.1" min="0.0" max="10" required oninput="pegarNota()"></p>

        <p>
        <!-- Campo somente leitura e desabilitado para edição.
        Usado apenas para exibição do valor da média -->
            <label for="media">Média:</label>
            <input value="<?=$aluno['media']?>" name="media" type="number" id="media" step="0.1" min="0.0" max="10" readonly disabled>
        </p>

        <p>
        <!-- Campo somente leitura e desabilitado para edição 
        Usado apenas para exibição do texto da situação -->
            <label for="situacao">Situação:</label>
	        <input value="<?=$aluno['situacao']?>" type="text" name="situacao" id="situacao" readonly disabled>
        </p>
	    
        <button type="submit" name="atualizar">Atualizar dados do aluno</button>
	</form>    
    
    <hr>
    <p><a href="visualizar.php">Voltar à lista de alunos</a></p>

</div>

    <!-- Chamando arquivo js para perguntar antes de excluir -->
    <script src="js/confirm.js"></script>


</body>
</html>