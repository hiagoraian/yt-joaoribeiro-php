<?php 

    function alunosClasse ($names){
        foreach ($names as $name){
            echo $name . " ";
        }
        echo "</br>";
    }

    $mediaClasse = fn($notas) => (array_sum($notas) / count($notas));


    function alunosAprovados($notas){
        $alunosAprovados = array_filter($notas, function ($aluno) {
            return $aluno['nota'] >= 6;
        });
    
        $alunosReprovados = array_filter($notas, function ($aluno) {
            return $aluno['nota'] < 6;
        });

        return [
            'aprovados' => array_column($alunosAprovados, 'nome'),
            'reprovados' => array_column($alunosReprovados, 'nome'),
        ];
    }

    function exibirAlunos($alunos){
        echo implode(" ", $alunos);
    }
    
    # O array_column retorna os valores de uma coluno do array informado, no caso eu peguei todos os itens que estava com a chave "nome" do array dos aprovados e reprovados.

    # O array_filter filtra elementos de um array utilizando uma função callback, é uma função criada e, em seguida, passada a outra função como um argumento.