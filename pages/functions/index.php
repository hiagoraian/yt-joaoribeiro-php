<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Atividade Functions</title>
</head>
<body>
    <?php 
        include 'controller.php';
    ?>
    <div class="container">
        <h2>Atividade sobre funções. </h2>
        <a href="../x11.php">Voltar para a página sobre funções</a>
    </div>
    <div class="container-block">
        <h3>Alunos da Classe.</h3>
        <?php 
            $alunos = ['Maria', 'joão', 'Marcos', 'Alana','Alice', 'karlla','Marcia', 'Hiago'];
            alunosClasse($alunos);
        ?>
        </br>
        <h3>Média de notas da Classe.</h3>
        <?php 
            $notas = [9,4,7,5,9,9,3,10];
        ?>
        <h4><?php echo "A média da turma é: " . $mediaClasse($notas);?></h4>
        </br>
        <h3>Alunos aprovados e reprovados.</h3>
        <?php 
            $notas = [
                ['nome' => 'João', 'nota' => 7],
                ['nome' => 'Maria', 'nota' => 8],
                ['nome' => 'Pedro', 'nota' => 5],
                ['nome' => 'Ana', 'nota' => 9]
            ];
            
            $resultado = alunosAprovados($notas);
            
            echo "Alunos Aprovados: ";
            exibirAlunos($resultado['aprovados']);
            echo "</br>";
            echo "Alunos Reprovados: ";
            exibirAlunos($resultado['reprovados']);
        ?>

    </div>
</body>
</html>