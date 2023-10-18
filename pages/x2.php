<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Youtube - João Ribeiro</title>
</head>
<body>
    <div class="container">
        <h2>Strings e arrays</h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>Introdução a strings e concatenação.</h3>
        <p>String é uma série de caracteres que podem ser guardados numa variável.</p>
        <p>Em PHP podemos usar a concatenação, atraves do ponto (.). A utilização da aspas duplas, o sistema ira interpretar, caso estiver uma variavel ou código, ja as aspas simples, não. </p>

        <?php 
            $var = "Essa é uma string.";
            $var2 = "Essa é outra string.";
            echo "$var"." $var2";
        ?>

    </div>
    <div class="container-block">
        <h3>Funções para operar com strings.</h3>
        <p>Por exemplo, comparação de strings, número de caracteres, todas maiúsculas ou minúsculas.</p>

        <?php 
            $a = "Hiago";
            $b = "Raian";

            $res1 = ($a == $b);
            $res2 = ($a != $b);

            $n = strlen($a); 
            echo "Número de caracteres : $n.</br>";

            $p = strtoupper($a);
            echo "Todas maiúsculas: $p. </br>";

            $s = strtolower($a);
            echo "Todas minúsculas: $s. </br>";

            $d = str_replace('i','x', $a);
            echo "Trocar a letrar i por x :  $d. </br>";

            # https://www.php.net/manual/pt_BR/ref.strings.php
        
            $name = "Hiago Raian Carvalho";
            # Buscar a palavra Hiago na string.
            $nameContains = str_contains($name, 'Hiago');
            # Verificar se a string começa com Pedro.
            $nameStarts = str_starts_with($name, 'Pedro');
            # Verificar se a string termina com lho.
            $nameEnds = str_ends_with($name, 'lho');
        ?>
    </div>
    <div class="container-block">
        <h3>Arrays.</h3>
        <p>Um array é na realidade uma coleção de valores, funciona como uma variável, mas pode conter muitos valores "arrumados" cada um no seu espaço.</p>
        <p>É possivel inserir dados no array com chaves aleatórias, ou você mesmo adicionar uma chave.</p>
        <p>Podemos ter arrays apenas com números, strings e variados.</p>
        <?php 
            $arrayNumber = [1,2,3,4,5];
            $arrayNames = ["Hiago", "Karlla"];
            $arrayVaried = ["Hiago", 1,2, "Raian"];

            var_dump($arrayNames);   echo"</br>";
            var_dump($arrayNumber); echo"</br>";
            var_dump($arrayVaried); echo"</br>";

            echo $arrayNames[0];  echo"</br>";
            echo $arrayVaried[2]; echo"</br>";
            echo $arrayNumber[3]; echo"</br>";
            
            # Função para adicionar dados ao array.
            $arrayNumber[] = 6;
            array_push($arrayNumber, 7);
            var_dump($arrayNumber);

            # Array Multidimensionais, deve buscar a linha e coluna, para retornar a informação.
            $numeros = [
                [10,20,30],
                [11,22,33],
                [26,28,45]
            ];
        ?>

        </br></br>
        <p>Registros com array.</p>
        <?php 
            $dados = [
                'nome' => 'Hiago',
                'email' => 'hiagoraian98@gmail.com',
                'telefone' => '38999852426'
            ];

            $cidades = [
                'MG' => ['Cristalia', 'Grão Mogol', 'Montes Claros'],
                'SP' => ['Bauro', 'São Paulo', 'Santo Andre']
            ];

            echo $dados['nome'];echo"</br>";
            echo $cidades['MG'][1];
            echo"</br></br>";

            # Atividade: Leia todos os valores da variável dados.
            print_r($dados);echo"</br>";
            print_r($cidades);echo"</br>";echo"</br>";

            foreach ($dados as $chave => $valor){
                echo $chave . ' : '. $valor . "</br>";
            }

            echo"</br>";

            # Utilizei o implode para transformar todo o array de cada chave em uma string, separado por vírgula.
            foreach ($cidades as $estado => $cidades_estado) {
                echo "Cidades do estado de $estado: ";
                echo implode(", ", $cidades_estado) . "<br>";
            }
        ?>
    </div>
    <div class="container-block">
        <h3>Funções para manipular arrays.</h3>
        <p>O PHP possui uma ampla variedade de funções para manipulação de arrays. Aqui estão algumas das principais funções usadas para manipular e trabalhar com arrays em PHP.</p>

        <?php 
            $array1 = [1,2,3,4];
            $array2 = [5,6,7,8];
            $array3 = [1,2];

            # Números de elementos de um array.
            $a = count($array1);
            echo $a;
            echo"</br>";
            
            # Combinando dois ou mais arrays
            $newArray = array_merge($array1, $array2);
            print_r($newArray);
            echo"</br>";

            # Adiciona um ou mais elementos no final de um array.
            array_push( $array3, 3 );
            print_r($array3);
            echo"</br>";

            # Removendo ultimo elemento de um array
            array_pop($array3);
            print_r($array3);
            echo"</br>";

            # Remover primeiro elemento de um array
            array_shift($array3);
            print_r($array3);
            echo"</br>";

            # Retornar uma parte de um array
            $array4 = array_slice($array1, 2,3);
            print_r($array4);
            echo"</br>";

            # Inverter a ordem de um array
            $arrayREverse = array_reverse($array4);
            print_r($arrayREverse);
            echo"</br>";

            # Remover valores duplicados de um array
            $arrayDuplicate = [1,1,1,2,3,4,5,5,5,6,7,7,7,8];
            print_r($arrayDuplicate);
            echo"</br>";
            $arrayUnique = array_unique($arrayDuplicate);
            print_r($arrayUnique);
            echo"</br>";
        ?>
    </div>
</body>
</html>