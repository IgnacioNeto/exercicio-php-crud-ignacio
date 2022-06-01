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
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>

    <table>
            <caption>Lista de Alunos</caption>
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
                        <td>  <?=$aluno['situacao']?> </td>

                        <!-- Link dinânmico -->
                        <td><a href="atualizar.php?id=<?=$aluno['id']?>" style ="color:blue;">Atualizar</a></td>
                        <td><a class="excluir" href="excluir.php?id=<?=$aluno['id']?>" style ="color:red;">Excluir</a></td>

                        <!-- Solução mais simples para perguntar antes de excluir-->
                        <!-- Colocar depois do <a: onclick="return confirm('Deseja excluir o item ?')" -->
                        
                    </tr>
                            
                    <?php } ?>
        
            </tbody>
        </table>


   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


    <p><a href="index.php">Voltar ao início</a></p>
</div>
    <!-- Chamando arquivo js para perguntar antes de excluir -->
    <script src="js/confirm.js"></script>

</body>
</html>