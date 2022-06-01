<?php
require_once "src/funcoes-alunos.php";
$listaDeAlunos = lerAlunos($conexao);

// Chamada de função para teste que retorna array
 // dump($listaDeAlunos);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css-bootstrap/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<body>
<div class="container">
    <h1 class="text-center">Lista de alunos</h1>
    <hr>

    <table class="table">
            <!-- <caption class="text-center">Lista de Alunos</caption> -->
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Média</th>
                    <th>Situação</th>
                    <th colspan="2">Operações</th>

                </tr>
            </thead>
            <tbody>
                <?php
                 
                    // echo "<pre>";
                    // var_dump($resultado); // Teste
                    // echo "<pre>";

                    foreach($listaDeAlunos as $aluno) { 

                   $class = corTabela($aluno['media']);
                        ?>
                    
                    <tr class = '<?=$class?>'>

                        <td>  <?=$aluno['nome']?> </td>
                        <td>  <?=$aluno['primeira_nota']?> </td>
                        <td>  <?=$aluno['segunda_nota']?> </td>
                        <td>  <?=$aluno['media']?> </td>
                        <td>  <b> <?=$aluno['situacao']?></b> </td>

                        <!-- Link dinânmico -->
                        <td><a class="btn btn-primary" href="atualizar.php?id=<?=$aluno['id']?>">Atualizar</a></td>
                        <td><a class="excluir btn btn-danger" href="excluir.php?id=<?=$aluno['id']?>">Excluir</a></td>

                        <!-- Solução mais simples para perguntar antes de excluir-->
                        <!-- Colocar depois do <a: onclick="return confirm('Deseja excluir o item ?')" -->
                        
                    </tr>
                            
                    <?php } ?>
        
            </tbody>
        </table>


    <div class="row mt-5 ">
        <p class="col text-end"><a class="btn btn-primary" href="index.php">Voltar ao início</a></p>
        <p class="col"><a class="btn btn-primary" href="inserir.php">Inserir novo aluno</a></p>
    </div>

</div>
    <!-- Chamando arquivo js para perguntar antes de excluir -->
    <script src="js/confirm.js"></script>

    <!-- _______________________________________________________________________ -->
<!-- Bootstrap JS -->
<script src="js-bootstrap/bootstrap.bundle.js"></script>  

</body>
</html>