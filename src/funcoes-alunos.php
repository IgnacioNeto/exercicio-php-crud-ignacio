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
function inserirAluno(PDO $conexao, string $nome, int $primeira_nota,  int $segunda_nota):void {

    $sql = "INSERT INTO alunos(nome, primeira_nota, segunda_nota) VALUES(:nome, :primeira_nota, :segunda_nota)";

    try {
        $consulta = $conexao->prepare($sql);

        $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
        $consulta->bindParam(':primeira_nota', $primeira_nota, PDO::PARAM_INT);
        $consulta->bindParam(':segunda_nota', $segunda_nota, PDO::PARAM_INT);
        // $consulta->bindParam(':media', $media, PDO::PARAM_INT);
        // $consulta->bindParam(':situacao', $situacao, PDO::PARAM_STR);

        $consulta->execute();

    } catch (Exception $erro){
        die("Erro: ".$erro->getMessage());
    }
}
function calculaSituacao ($media) {
    if ($media >=7){
        $situacao= "Aprovado";
    } else {
        $situacao= "Reprovado";
    }
}


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