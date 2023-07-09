<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Revisão do conteúdo</title>
</head>
<body>
    <div class="container">
        <h2>Revisão sobre registros, operadores ternários, foreach e funções. </h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>Registros</h3>
        <p>O PHP não possui um tipo de dado especifico chamado "registro" no entanto, é possível criar um registro usando arrays associativos ou objetos.</p>
        <?php 
            $pessoa = [
                'nome' => 'Hiago Raian',
                'idade' => 25,
                'nascimento' => 'Grão Mogol'
            ];

            echo "</br>";
            echo "Nome: " . $pessoa['nome'] . "</br>";
            echo "Idade: " . $pessoa['idade'] . "</br>";
            echo "Nascimento: " . $pessoa['nascimento'] . "</br>";
            echo "</br>";

            foreach($pessoa as $campo => $valor){
                echo $campo . ": " . $valor . "</br>";
            };
            echo "</br>";

            $cidadesEstados = [
                'MG' => ['Montes Claros', 'Belo Horizonte', 'Grão Mogol'],
                'SP' => ['Ilha Bela', 'Santos', 'Bauru'],
                'BA' => ['Porto Seguro', 'Salvador', 'Ilheus']
            ];
           
           foreach ($cidadesEstados as $estados => $cidades){
            echo "Estado: " . $estados . "</br>";

                foreach($cidades as $cidade ){
                    echo $cidade . ", ";
                }

                echo "</br></br>";
           };

           # Tansformando todo o array por uma string.
           foreach($cidadesEstados as $states => $city){
            echo "Cidades do estado " . $states ." : ";
            echo implode(",", $city);
            echo "</br>";

           }
           
        ?>
    </div>
    <div class="container-block">
        <h3>Operador Ternário</h3>
        <p>É uma forma de expressar uma condição em uma única linha.</p>
        <p>$variavel = (condição) ? valor_se_verdadeiro : valor_se_falso;</p></br>
        <?php 
            # É uma forma de expressar uma condição em uma única linha.
            # $variavel = (condição) ? valor_se_verdadeiro : valor_se_falso;

            $idade = 20;
            $status = ($idade >= 18) ? "Maior de idade.": "Meno de idade";
            echo $status . "</br>";
            echo  ($idade >= 18) ? "Maior de idade.": "Meno de idade";
        ?>
    </div>
    <div class="container-block">
        <h3>Foreach</h3>
        <p>A estrutura de controle foreach em php é usada para percorrer arrays e objetos.</p></br>

        <h4>Exemplo 01: Array numérico.</h4>
        <?php 
            $nums = [1,2,3,4,5,6];
            foreach($nums as $num){
                echo $num . "</br>";
            };
        ?>

        </br>
        </br>
        <h4>Exemplo 02: Percorrendo um array associativo.</h4>
        <p>Lembrando que nesse modelo simples, temos sempre uma chave e o valor dela.</p>
        <?php 
            $aluno = [
                'nome' => 'Hiago Rain',
                'idade' => 25,
                'nota' => 10
            ];

            foreach ($aluno as $key => $value){
                echo $key . " : " . $valor . "</br>";
            };
        ?>

        </br>
        </br>
        <h4>Exemplo 03: Percorrrendo um array multidimensional.</h4>
        <p>Como se fosse fazer 2 for, o primeiro pega a linha, o segundo foreach percore os valores da linha.</p>
        <?php 
            $matriz = [
                [1,2,3],
                [4,5,6],
                [7,8,9]
            ];

            foreach ($matriz as $linha){
                foreach ($linha as $valor){
                    echo $valor . " ";
                }
            echo "</br>";
            }
        ?>
        </br>
        </br>

        <h4>Exemplo 04: Manipulando um array associativo com chaves e valores.</h4>
        <p>Usamos a mesma lógica do array associados com chave, so que, o valor da chave é outro array, por isso usamos um novo foreach para percorrer esse array, ou transformamos todo o array em uma string, com implode.</p></br>
        <?php 
            $carros = [
                'placa01' => ['Cruze', 'Hilux', 'I30x'],
                'placa02' => ['CruzeLTZ', 'BMW', 'I10x'],
                'placa03' => ['Cobat', 'Fox', 'I20x']
            ];

            foreach ($carros as $placa => $modelos){
                echo "Modelos da placa: " . $placa . "</br>";

                foreach( $modelos as $car ){
                    echo $car. " ";
                }
                echo "</br>";
            };
        ?>
        </br>
        </br>

        <h4>Exemplo 05: Manipulando array com índices numéricos e associativos</h4>
        <p>Como o array tem indices numéricos e associativos, primeiro foi feito uma condição para se caso a indice for um array, realizar outro foreach para ler ou transformar tudo em string, com implode.</p></br>

        <?php 
            $dados = [
                'nome' => 'Maria',
                'idade' => 25,
                'cidade' => 'São Paulo',
                'notas' => [10,8,8]
            ];

            foreach($dados as $chave => $valor){
                if(is_array($valor)){
                    echo "$chave: ";
                    foreach( $valor as $item){
                        echo $item . " ";
                    }     
                    echo "</br>";
                } else
                echo "$chave : $valor </br>"; 
            };
            echo "</br></br>";
            
            foreach($dados as $chave => $valor){
                if(is_array($valor))
                    echo $chave .": ". implode("," ,$valor) . ". </br>";
                else
                    echo "$chave: $valor </br>";
            }
        ?>
    </div>
    <div class="container-block">
        <h3>Funções</h3>
    </div>
</body>
</html>