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
        <h2>Atividade sobre variáveis, arrays, string, registros, foreach, operadores ternários e funções. </h2>
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
</body>
</html>