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
        <h2>Apresentação, variáveis, tipos de dados, operadores.</h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>Aprensentação de conteúdo com echo e print.</h3>
        <?php 
            echo "Apresentação Echo </br>";
            print "Apresentação Print";
        ?>
    </div>
    <div class="container-block">
        <h3>Criando uma variável.</h3>
        <?php 
            $variaveis = 100;
            var_dump($variaveis);
        ?>
    </div>
    <div class="container-block">
        <h3>Tipos de dados de uma variável.</h3>
        <?php 
            $inteiro = 10;
            $float = 10.6;
            $bool = true;
            $string = "Hiago";
            $array = [1,2,3];
            #$pessoa = new Pessoa();
            $nulo = null;

            var_dump($inteiro, $float, $bool, $string, $array, $nulo);
        ?>
    </div>
    <div class="container-block">
        <h3>Operadores de atribuição e operadores matemáticos.</h3>
        <p>Permite atribuir um valor e fazer calculos matemáticos.</p>
        <?php 
            $nameAtribuicao = "Hiago";
            $x = 4+2;
            $x = 4-2;
            $x = 4*2;
            $x = 4/2;
            $x = 4%2;
        ?>
    </div>
    <div class="container-block">
        <h3>Operadores combinados e incremento/decremento</h3>
        <p>Permitem alterar o valor de uma variável, de modo simplificado.</p>
        <?php 
            $a = 10;
            $a +=10;
            $a -=10;
            $a *=10;
            $a /=2;
            
            # Incremento e decremento.
            $a ++;
            $a --;
        ?>
    </div>
    <div class="container-block">
        <h3>Operadores de comparação</h3>
        <p>Permite efetuar uma comparação entre valores, verificando se os valores são iguais, diferentes, maiores ou menores, ou da mesmo tipo.</p>
        <?php 
            # Valores são iguais? F, V, F, F, F, V.
            $var = (2 == 3);
            $var = (3 == '3');
            $var = (3 === '3');
            $var = (2 === '3');
            
            # A primeira comparação não está associado o tipo de variável, como na segunda comparação.
            $varComparacao1 = (3 != '3');
            $varComparacao2 = (3 !== '3');

            # Comparação de valores.
            $var = ( 10 > 5);
            $var = ( 40 < 20);
            $var = ( 40 <= 20);
            $var = ( 40 >= 20);
        ?>
    </div>
    <div class="container-block">
        <h3>Operadores lógicos</h3>
        <p>São frequentemente usados com os operadores de comparação, eles permitem 'ligar' várias comparações avaliando se são verdadeiras ou faltas.</p>
        <?php 
            $a = 100;
            $b = 200;

            $x = ($a < $b) && ($b > $a);
            $x = ($a < 500) || ($b >= 250);
        ?>
    </div>
</body>
</html>