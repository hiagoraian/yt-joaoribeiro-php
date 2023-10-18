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
        <h2>Considerações finais. </h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>Testanto variáveis: Isset, Empty, is null e Unset.</h3>
        <p>Acontece inúmeras vezes no nosso código a necessidade de verificar ou textar a existência de variáveis ou do seu valor.</p>

        <?php 
            # Isset.
            # Permite verificar se uma variável está ou não definida.
            # Null é considerado como uma variável inexistente.

            $exemploIsset = 1;

            echo isset($exemploIsset) ? 'Sim.' : 'Não.';
            echo "</br>";
            
            # Empty
            # Verifica se a variável tem um valor vazio (null, 0, false, string vazia) e retorna verdadeiro ou falso.

            $exemploEmpty = 'Hiago';
            echo empty($exemploEmpty) ? 'Vazio' : 'Não vazio';
            echo "</br>";
            
            # Is_null.
            # verifica se a variável é nula.

            $exemploNull = null;
            echo is_null($exemploNull) ? 'É nulo' : 'Não é nulo';
            echo "</br>";

            # Unset.
            # Permite destruir uma variável.

            $exemploUnset = 'Hiago';
            var_dump($exemploUnset);
            unset($exemploUnset);
            # var_dump($exemploUnset);

        ?>
    </div>
    <div class="container-block">
        <h3>Null coalescing operador</h3>
        <p>Basicamente esse operador é um atalho para alguns casos do operador condicional ternário.</p>

        <?php 
            $x = 'Marcos';

            $name = $x ?? 'Sem Nome';
            echo $name;

        ?>
    </div>

    <div class="container-block">
        <h3>Verificando tipo de variáveis.</h3>
        <p>O PHP contém um conjunto de funções que permitem avaliar que tipo de dados estão guardados dentro de uma variável.</p>
        <p>Funções similare: is_callable() is_float() is_real() is_int() is_long() is_null() is_numeric() is_object() is_string.</p>

        <?php 
            $nome = 'Hiago Raian';
            $idade = 24;
            $acordado = true;

            echo is_array($nome) ? 'É uma array' : 'Não é um array';
            echo "</br>";
            echo is_bool($acordado) ? 'É um boleano' : 'Não é um booleano';
            echo "</br>";
            echo is_int($idade) ? 'É um inteiro' : 'Não é um inteiro';
            echo "</br>";
        ?>
    </div>

    <div class="container-block">
        <h3>Print_r var_dump e var_export</h3>
        <p>var_dump() : É usado para exibir informações detalhadas sobre uma ou mais variáveis.</p>
        <p>Print_r() : É usada para exibir informações sobre uma variável de uma maneira mais legível para humanos. </p>
        <p>var_export() : Exibe ou retorna uma representação em formato válido de uma variável ou estrutura de dados.</p>

        <?php 
            # Var_dump
            $nome = 'Tião';
            $idade = 44;
            var_dump($nome, $idade);
            echo "</br>";

            # Print_r
            $arrayDados = [1,2,3];
            print_r($arrayDados);
            echo "</br>";
            var_dump($arrayDados);
            echo "</br>";

            # Var_export
            $carro = "Toyota";
            $carArray = ['Cruze', 'Hilux', 'Marea'];

            var_export($carro);
            echo "</br>";
            var_export($carArray);
        ?>
    </div>
</body>
</html>