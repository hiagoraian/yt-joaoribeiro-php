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
        <h2>Revisão sobre manipulação de variáveis, strings e arrays. </h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>Manipulação de variáveis.</h3>
        <?php 

            # Boolval - Obtém o valor booleano de uma variável.
            $boolvalTest = 10;
            echo (boolval($boolvalTest) ? 'true':'false')  ."</br>";
            $boolvalTest2 = 0;
            echo (boolval($boolvalTest2) ? 'true':'false')  ."</br>";

            #empty - Determina se a variável é vazia.
            $emptyTest = 0;
            if (empty($emptyTest)) {
                echo '$emptytest está vazia. </br>';
            }

            #Isset = Verifica se uma variável é definida.
            #Unset = Exclui uma variável.
            $issetTest = 10;
            if(isset($issetTest)){
                echo "A variável existe. </br>";
            }else
                echo "A variável não existe. </br>";

            unset($issetTest);
            if(isset($issetTest)){
                echo "A variável existe. </br>";
            }else
                echo "A variável não existe. </br>";

            #Gettype - Retorna o tipo da variável no PHP.
            $dataGettype = [1,10.1, null, new stdClass, 'foo'];

            foreach( $dataGettype as $data){
                echo gettype($data) . "</br>";
            }

            #Intval - Retorna o valor inteiro da variável.

            $intvalTest = [10, 10.324234, 10.2342];

            foreach ($intvalTest as $data){
                echo intval($data) . "</br>";
            }

            #verificação de uma variável.
            $isString = "foo";
            $isInt = 1;
            $isBool = true;
            $isNull = null;
            $isFloat = 10.323;
            $isObject = new stdClass();

            echo is_int($isInt) .  is_float($isFloat) . is_string($isString) . is_bool($isBool) . is_null($isNull) . is_object($isObject) . "</br>";

            #Print_r Var_dump - Imprimir informações sobre uma variável de forma legível. O vardump é mais detalhado.
            $printrTest = "Hiago";
            print_r($printrTest);
            var_dump($printrTest);
            echo "</br>";

            #Settype - Atribui um tipo para a variável.
            $settypeTest = 10;
            var_dump($settypeTest);
            settype($settypeTest, "string");
            var_dump($settypeTest);
            echo "</br>";

            #Var_export - Mostrar ou retornar uma representação estruturada de uma variável.
            $exportTest = [10,2,3,54,32,1223,12,34];
            var_dump($exportTest);
            echo "</br>";
            var_export($exportTest);
        ?>
    </div>
    <div class="container-block">
        <h3>Manipulação de string.</h3>
        <?php 
            #Implode - Juntar elementos de uma matriz em uma string.
            $implodeTest = ['lastname', 'email', 'phone'];
            var_dump($implodeTest);
            echo "</br>";
            echo implode(",", $implodeTest). "</br>";
            
            #Str_split - Converte uma string para um array.
            $strsplitTest = "Hiago";
            $arrSplit = str_split($strsplitTest);
            print_r($arrSplit);
            echo "</br>";

            #Strtolower - Converte uma string para minúsculas.
            $strtolowerTest = "Eu sou Hiago Raian";
            echo strtolower($strtolowerTest) . "</br>";

            #Strtoupper - Converte uma string para maiúsculas.
            $strtoupperTest = "Eu Sou hiago";
            echo strtoupper($strtoupperTest) . "</br>";

            #Trim - retira espaço no início e final de uma string.
            $trimTest = " Hiago ";
            echo $trimTest . "</br>";
            echo trim($trimTest) . "</br>";

            #Ucfirst - Converte para maiúscula o primeiro caractere de uma string.
            $firstTest = "eu passei aqui.";
            echo ucfirst($firstTest). "</br>";

            #ucwords - Converte para maiúsculas o primeiro caraquetere de cada letra.
            $wordsTest = "eu passei por aqui.";
            echo ucwords($wordsTest) . "</br>";
        ?>  
    </div>
    <div class="container-block">
        <h3>Manipulação de arrays.</h3>
        <?php 
            #Array_filter - Filtra elementos de um array utilizando uma função callback.

            function impar($var){
                return $var & 1;
            }
            function par ($var){
                return !($var & 1);
            }

            $arrayFilter = [ 1,2,3,4,5,6,7,8,9,10];

            print_r(array_filter($arrayFilter, "impar"));
            echo "</br>";

            #Array_keys - Retorna as chaves, números e string, do array.
            $arrayKeysTest = [1,3,4,6,7,8,10,20,21];
            print_r(array_keys($arrayKeysTest, 7)); 

            #Array_map - Aplica uma função callback em todos os elementos dos arrays
            function notaPeso($nota){
                return $nota * 4;
            }

            $notasTest = [3,9,12,23,44];
            $resultMapTest = array_map('notaPeso', $notasTest);
             print_r($resultMapTest);
             echo "</br>";

             #Array_merge - Combina um ou mais arrays.
             $arrayMergeTest1 = ['azul',2,4,32];
             $arrayMergeTest2 = ['branco', 36,11,23];

             $resultMerge = array_merge($arrayMergeTest1, $arrayMergeTest2);
             print_r($resultMerge);

             #Array_multisort - Ordena múltiplos arrays ou array multidimensionais.
             $arrayMultisortTest1 = [2,3,5,7,9,12,14];
             $arrayMultisortTest2 = [22,33,15,57,69,1222,144];
             $arrayMultisortTest3 = [20,333,52,67,94,122,145];
             array_multisort($arrayMultisortTest1, $arrayMultisortTest2, $arrayMultisortTest3);

             var_dump($arrayMultisortTest1);

             #array_pop - Extrai um elemento do final do array. Pega o último elemento.
             $frutasPopTest = ['melancia', 'mamao', 'morango'];

             $frutasPop = array_pop($frutasPopTest);
             print_r($frutasPop);
             echo "</br>";

             #array_product - Retorna o produto com um inteiro ou float dos elementos do array.
             $arrayProductTest = [1,2,3,4,5];
             echo array_product($arrayProductTest) . "</br>";

             #array-push - Adiciona um ou mais elementos no final de um array.
             $pushTest = [1,2,3,4,5,6,7,8];
             array_push($pushTest, 9,10,11 );
             print_r($pushTest);
             echo "</br>";

             #array_rand - Escolhe uma ou mais chaves aleatórias no final de um array.
             $randTest = [1,2,3,4,5,6,7];
             echo array_rand($randTest) . "</br>";

             #array_reverse - Retorna um array com os elementos na ordem inversa.
            $reverseTest = [1,2,3,4,5,6];
            print_r(array_reverse($reverseTest));
            echo "</br>";

             #array_search - Procura por um valor em um array e retorna sua chave correspondente.
             $searchTest = [1,2,3,4,5,6];
             print_r(array_search(3, $searchTest));
             echo "</br>";   

             #array_shift - Extrai o primeiro elemento de um array. Pega o primeiro valor.
            $shiftTest = [2,3,4,5];
            print_r(array_shift($shiftTest));
            echo"</br>";

             #array_sum - Calcula a soma dos elementos de um array.
            $sumTest = [1,2,3,4];
            print_r(array_sum($sumTest));
            echo "</br>";

             #array_unique - Remove os valores duplicados de um array.
            $uniqueTest = [1,1,1,3,4,5,6,7,7,7,8];
            print_r(array_unique($uniqueTest));
            echo "</br>";

             #array_unshift - Adiciona um ou mais elementos no inicio de um array.
            $unshiftTest = [1,2,3,4,5,6];
            array_unshift($unshiftTest, 0);
            print_r($unshiftTest);
            echo "</br>";

             #array_values - Retorna todos os valores de um array.
            $arrayValuesTest = [ 12,3,7,84,43,23,8];
            print_r(array_values($arrayValuesTest));
            echo "</br>";

             #count - Conta o número de elementos de uma variável, ou propriedades de um objeto.
            $countTest =  [12,1,2,31,124,6,45,37];
            echo count($countTest) . "</br>";

        ?>
    </div>
</body>
</html>