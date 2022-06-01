<?php
require_once "conecta.php";
// ______________________________________________________________

function lerAlunos(PDO $conexao):array {
       // String com o comando SQL
       $sql = "SELECT id, nome, primeira_nota, segunda_nota, media, situacao FROM alunos";
        try {
            // preparação do coamndo
            $consulta = $conexao->prepare($sql);

            // Execução do comando
            $consulta->execute();

            // capturar os resultados
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die ("Erro" .$erro->getMessage());
        }
        return $resultado;
}
// ______________________________________________________________

// Inserir um aluno
function inserirAluno(PDO $conexao, string $nome, float $primeira_nota,  float $segunda_nota, float $media, string $situacao):void {

    $sql = "INSERT INTO alunos(nome, primeira_nota, segunda_nota, media, situacao) VALUES(:nome, :primeira_nota, :segunda_nota, :media, :situacao)";

    try {
        $consulta = $conexao->prepare($sql);

        $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
        $consulta->bindParam(':primeira_nota', $primeira_nota, PDO::PARAM_STR);
        $consulta->bindParam(':segunda_nota', $segunda_nota, PDO::PARAM_STR);
        $consulta->bindParam(':media', $media, PDO::PARAM_STR);
        $consulta->bindParam(':situacao', $situacao, PDO::PARAM_STR);

        $consulta->execute();

    } catch (Exception $erro){
        die("Erro: ".$erro->getMessage());
    }
}
// __________________________________________________

function lerUmAluno(PDO $conexao, int $id):array {
    $sql = "SELECT id, nome, primeira_nota, segunda_nota, media, situacao FROM alunos WHERE id = :id";
    
     try {
         // preparação do comando
         $consulta = $conexao->prepare($sql);

         $consulta->bindParam(':id', $id, PDO::PARAM_INT);

         // Execução do comando
         $consulta->execute();

         // capturar os resultados
         $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
     } catch (Exception $erro) {
         die ("Erro" .$erro->getMessage());
     }
     return $resultado;
}
// __________________________________________________

function atualizarAluno(PDO $conexao, int $id, string $nome, float $primeira_nota, float $segunda_nota, float $media, string $situacao) {
    $sql = "UPDATE alunos SET nome = :nome, primeira_nota = :primeira_nota, segunda_nota = :segunda_nota, media = :media, situacao = :situacao WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);

        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
        $consulta->bindParam(':primeira_nota', $primeira_nota, PDO::PARAM_STR);
        $consulta->bindParam(':segunda_nota', $segunda_nota, PDO::PARAM_STR);
        $consulta->bindParam(':media', $media, PDO::PARAM_STR);
        $consulta->bindParam(':situacao', $situacao, PDO::PARAM_STR);

        // Execução do comando
        $consulta->execute();

    } catch (Exception $erro) {
        die ("Erro" .$erro->getMessage());
    }
}
// __________________________________________________

function excluirAluno(PDO $conexao, int $id):void {
    $sql = "DELETE FROM alunos WHERE id = :id ";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->execute();

    } catch (Exception $erro){
        die("Erro: ".$erro->getMessage());
    }
}
// __________________________________________________

function calculaSituacao ($media) {
    if ($media >=7){
        $situacao= "Aprovado";
    } else {
        $situacao= "Reprovado";
    }
    return $situacao;
}
// __________________________________________________

function corTabela ($media) {
    if ($media >=7){
        $class= "verde";
    } else {
        $class= "vermelho";
    }
    return $class;
}
// __________________________________________________

function calculaMedia (float $n1, float $n2): float {
    // Variável Local

    $media = ($n1 + $n2)/2;
    return $media;
    
}

// ___________________________________________________________________

/* Funções utilitárias */
function dump($dados){
    echo "<pre>";
    var_dump($dados);
    echo "<pre>";
}