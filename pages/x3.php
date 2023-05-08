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
        <h2>Instruções e ciclos. </h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>IF, IF ELSE, ELSE</h3>
        <p>As instruções são utilizadas para controlar o fluxo da aplicação de acordo com determinadas condições.</p>
        
        <?php 
            $var = 5;
             if($var == 2){
                echo "Igual a 2";
             } else if($var == 5){
                echo "Igual a 5";
             }else
                echo "Nenhuma das opções";
            
            echo "</br>";

            if($var >= 5 && $var < 10){
                echo "Número maior ou igual a 5 e menor que 10.";
            }

            echo "</br>";
            #Alternativa ao IF, utilizada em páginas web.
            if($var == 5):
                echo "Igual a 5";
            else:
                echo "Não é igual";
            endif;

            echo "</br>";
        ?>
        <p>Exemplo de uma execução de IF em página web:</p>
        <?php if(true):?>
            <h4>Passou.</h4>
        <?php else:?>
            <h4>Não passou.</h4>
        <?php endif;?>

    </div>
    <div class="container-block">
        <h3>Switch</h3>
        <p>Uma alternativa ao IF.</p>

        <?php 
            $name = "Karlla";
            switch($name){
                case 'Hiago':
                    echo "Ele chama Hiago.";
                    break;
                
                case 'Karlla':
                    echo "Ela chama Karlla.";
                    break;
                
                default:
                    echo "Nome invalido.";
                    break;
            }   
        ?>
    </div>

    <div class="container-block">
        <h3>Operador ternário.</h3>
        <p>É um operador adicional que pode substituir uma estrutura simples IF, ELSE. </p>

        <?php 
            $op = 2;

            $car = $op == 1? 'Cruze.' : 'Hilux.';
            echo $car;

            echo "</br>";
            echo $op == 2 ? 'Sim.' : 'Não.';
        ?>
        <h4><?php  echo $op == 2 ? 'Sim.' : 'Não.'; ?></h4>
        <h4 style="color: <?= $op == 2 ? 'red' : 'blue'?>">Texto de exemplo, operador ternário em CSS.</h4>
    </div>

    <div class="container-block">
        <h3>Match.</h3>
        <p>No PHP 8 foi introduzida uma nova expressão condicional, muito semelhante ao Switch.</p>

        <?php 
            $varMatch = 3;
            echo match ($varMatch){
                1 => 'Opção 1',
                2 => 'Opção 2',
                3 => 'Opção 3',
                default => 'Nenhuma opção.'
            }
        ?>
    </div>
    <hr><hr>
    <div class="container-block">
        <h3>While, Do While</h3>
        <p>While executa loop enquanto a condição for verdadeira, Do While executa loop primeiro, depois verifica a condição. </p>

        <?php 
            $x = 10;
            while($x <10){
                echo "X é menor que 10, while";
            }

            do {
                echo "X é menor que 10, Do While";
            }
                while($x <10);

            echo "</br>";

            while($x < 20){
                echo "X é : $x. ";
                $x++;
            }
        ?>
    </div>

    <div class = "container-block">
        <h3>For</h3>
        <p>Permite executar um bloco de códigos determinado números de vezes.</p>

        <?php 
            for ($i = 0; $i <=10; $i++){
                echo "O valor é: $i. ";
            }

            echo "</br>";

            for ($i = 0, $p = 100; $i <=10; $i++, $p-=5){
                echo "O valor é: $p. ";
            }

            echo "</br>";
            $arrayNames = [ 'Hiago', 'Karlla', 'Maria'];

            for ( $i = 0; $i < sizeof($arrayNames); $i++){
                echo "$arrayNames[$i]. ";
            }
        ?>
    </div>

    <div class="container-block">
        <h3>Foreach</h3>
        <p>É um ciclo especialmente concebido para fazer uma iteração pelos valores de um array.</p>

        <?php 
            $names =  ['Hiago', 'Jose', 'Maria'];
            $capitais = [
                'Portugal' => 'Lisboa',
                'Brasil' => 'Brasilia',
                'Espanha' => 'Madrid'
            ];
            $cidades = [
                'MG' => ['Cristalia', 'Grão Mogol', 'Montes Claros'],
                'SP' => ['Bauro', 'São Paulo', 'Santo Andre']
            ];


            foreach($names as $name){
                echo "$name. ";
            }
            
            echo "</br>";
            
            foreach( $capitais as $key =>$value){
                echo "A capital de $key é $value. ";
            }

            echo "</br>";  

            foreach ($cidades as $estado => $cidades_estado) {
                echo "Cidades do estado de $estado: ";
                echo implode(", ", $cidades_estado) . "<br>";
            }
        ?>
    </div>

    <div class="container-block">
        <h3>Break, Continue</h3>
        <p>Break: Serve para interromper a execução de um loop.</p>
        <p>Continue: Permite avançar uma volta do ciclo ignorando o código que deveria ser executado.</p>
    </div>
</body>
</html>