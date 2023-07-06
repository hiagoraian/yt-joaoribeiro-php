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
        <h2>Funções. </h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>Introdução a funções.</h3>
        <p>Funções são blocos de códigos identificados por um nome e uma assinatura que permitem que o código seja reutilizado e organizado de uma forma mais consistente.</p>

        <?php 
            #Estrutura básica.
            function funcao(){
                echo "Executando a estrutura básica de funções. </br>";
            }
            funcao();
        ?>

    </div>
    <div class="container-block">
        <h3>Parâmetros de uma função.</h3>
        <p>São valores dos quais a função depende para ser executada.</p>
        
        <?php 
            function adicao ($a, $b){
                echo $a + $b;
            }

            adicao(3,4);
            echo "</br>";

            $c = 5;
            $d = 5;
            adicao($c, $d);
            echo "</br>";

            $names = ['Hiago', 'Karlla', 'Maria'];

            function saudacoes($name){
                echo "Seja bem vindo(a), $name.";
            }

            foreach ($names as $name){
                saudacoes($name);
                echo "</br>";
            }
        ?>

    </div>
    <div class="container-block">
        <h3>Parâmetros adicionais.</h3>
        <p>Podemos criar funções que tem um valor pre definido.</p>

        <?php 
            function multiplicacao($a, $b = 2){
                echo  $a * $b ."</br>";
            }

            multiplicacao(10);
            multiplicacao(20,10);
        ?>
    </div>
    <div class="container-block">
        <h3>Named Arguments.</h3>
        <p>Como padrão, passamos os parâmetros de uma função na mesma ordem declarada, named arguments permite colocar nomes nesses parâmetros, e passar fora de ordem.</p>

        <?php 
            function subtracao($a, $b, $c){
                echo $a-$b-$c."</br>";
            }

            subtracao(b: 5, c: 10, a:20);
        ?>

        <p>Podemos usar um argumento especial designado por variadic parameter.</p>

        <?php 
            function arrayFunction(...$arguments){
                foreach($arguments as $cont){
                    echo "$cont. ";
                }
            }

            arrayFunction(10,20,30,40,50,60);
        ?>
    </div>
    
    <div class="container-block">
        <h3>Expressão Return.</h3>
        <p>A declaração return provoca o fim da execução do código de uma função, retornando ao local onde a função foi chamada.</p>

        <?php 
            function areaTriangulo($altura, $base){
                $result = ($base*$altura)/2;

                return $result;
            }

            $resultado = areaTriangulo(10,2);

            echo "A área do triângulo é : $resultado.</br>";

            $count = 10;

            if(avaliarNumero($count)){
                echo "O numero está correto.</br>";
            }

            function avaliarNumero($x){
                if ($x == '10')
                    return true;
                else
                    return false;
            }
            
        ?>
    </div>
    <div class="container-block">
        <h3>Escopo de uma variável e expressão global.</h3>
        <p>Normalmente uma variável PHP passa a existir a partir do local onde é iniciada e existe até o fim da página. Variáveis dentro de uma função, elas tem um ciclo de vida limitado.</p>

        <?php 
            $globalVar = 100;

            function lerGlobal(){
                echo $GLOBALS[ 'globalVar'];
            }

            lerGlobal();
        ?>
    </div>
    <div class="container-block">
        <h3>Funções anônimas.</h3>
        <p>Uma função anônima não tem nome e pode ser definida com o valor a atribuir a uma variável.</p>

        <?php 
            $varSoma = function($a,$b){
                return $a+$b;
            };
            $varText = function(){
                echo "Olá, sou um texto. </br>";
            };

            $varText();
            echo $varSoma(10,20);
        ?>
    </div>
    <div class="container-block">
        <h3>Funções Closure.</h3>
        <p>São funções anônimas que podem usar variáveis do escopo global.</p>

        <?php 
            $p = 10;
            $q = 5;

            $minhaClosure = function($z) use ($p, $q){
                return $z + $q + $p;
            };

            echo $minhaClosure(5);
        ?>
    </div>
    <div class="container-block">
        <h3>Arrow Functions.</h3>
        <p>Elas permitem criar funções de forma mais concisa e fácil de ler, principalmente quando se trata de funções simples.</p>

        <?php 
            function dobrar($num){
                return $num *2;
            };

            $dobrar = fn($num) => $num *2;

           echo  dobrar(10);
           echo "</br>";
           echo $dobrar(10);
        ?>
    </div>
</body>
</html>