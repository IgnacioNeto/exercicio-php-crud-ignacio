<?php
require_once "src/funcoes-alunos.php";
$listaDeAlunos = lerAlunos($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">

<!-- Jquery (DataTable) CSS -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css-bootstrap/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<body>
<div class="container">
    <h1 class="text-center">Lista de alunos</h1>
    <hr>
    <table id="myTable">
        <caption class="text-center">Lista de Alunos</caption>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Média</th>
                <th>Situação</th>
                <th class="text-center">Operações</th>

            </tr>
        </thead>
        <tbody>
        <?php foreach($listaDeAlunos as $aluno) { 
                   $class = corTabela($aluno['media']);
        ?>
            <tr class='<?=$class?>'>
            <td>  <?=$aluno['nome']?> </td>
                        <td>  <?=$aluno['primeira_nota']?> </td>
                        <td>  <?=$aluno['segunda_nota']?> </td>
                        <td>  <?=$aluno['media']?> </td>
                        <td>  <?=$aluno['situacao']?> </td>
                <td class="text-center">
                <a class="btn btn-primary" href="atualizar.php?id=<?=$aluno['id']?>">Atualizar</a>
                
                <a class="excluir btn btn-danger" href="excluir.php?id=<?=$aluno['id']?>">Excluir</a>
                </td>
            </tr>
            <?php } ?>  

            </tbody>
        </table>
      
    <div class="row mt-5 ">
        <p class="col text-end"><a class="btn btn-primary" href="index.php">Voltar ao início</a></p>
        <p class="col"><a class="btn btn-primary" href="inserir.php">Inserir novo aluno</a></p>
    </div>

</div>

<!-- Jquery JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<!-- Jquery JS (Chamada da função - DataTable)-->
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<!-- Chamando arquivo js para perguntar antes de excluir -->
<script src="js/confirm.js"></script>

<!-- Bootstrap -->
<script src="js-bootstrap/bootstrap.bundle.js"></script>  

</body>
</html>