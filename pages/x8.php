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
        <h2>Include. </h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>Include.</h3>
        <p>Ao usar o 'include' você pode incluir qualquer tipo de arquivo, como de configuração, bibliotecas, partes de páginas HTML, trechos de códigos, etc.</p>

        <?php 
            include './server/config.php';
            echo "</br>";
            $objFrame = new Config('Laravel');
            echo $objFrame->getFramework();

        ?>
    </div>
    <div class="container-block">
        <h3>Require.</h3>
        <p>Função semelhante ao 'include'. A principal diferença está na forma como eles tratam erros durante a inclusão de arquivos. </p>
        <p>A função 'require' interrompe a execução do script se ocorrer algum erro ao incluir o arquivo, se o arquivo não for encontrado ou houver algum outro problema durante a inclusão. Já o 'include' isso não acontece.</p>

        <?php 

           # require './server/config.php';
           echo $objFrame->getFramework();
        ?>
    </div>
    <div class="container-block">
        <h3>Include_once e Require_once</h3>
        <p>Ambas as funções são usadas para incluir arquivos em um script PHP, mas garantem que o arquivo seja incluído apenas uma vez, mesmo que seja chamado várias vezes no mesmo script.</p>
        <p>Se o arquivo já tiver sido incluído, o PHP simplesmente ignora a inclusão e continua a execução do script. Caso contrário, o arquivo é incluído normalmente. </p>

        <?php 
            include_once './server/config.php';
        ?>
    </div>

    <div class="container-block">
        <h3>Declaration types.</h3>
        <p>Quando dizemos que PHP não é uma linguagem tipificada, isto é, as variáveis não têm necessariamente que ser definidas com um tipo. É possível especificar claramente que tipo de valor podemos usar para parâmetros de uma função, propriedade de classes e tipos de retorno de funções.</p>

        <?php 
            function falar(array $arrayDados){
                foreach ($arrayDados as $dados){
                    echo "Nome: $dados </br>";
                }
            }
            function nome(string $nome){
                echo $nome;
            }

            # falar('hiago'); Erro, esperava um array.
            falar(['Hiago', 'Lara']);
            echo "</br>";
            nome('Hiago');
        ?>
    </div>

    <div class="container-block">
        <h3>Type Conversions</h3>
        <p>É possível realizar conversões de tipos de dados usando várias funções e operadores</p>

        <?php 
            # Números inteiros.

            $numero = 10;
            $texto = "10";
            var_dump($numero, $texto);

            echo "</br>";
            $conversaoTexto = intval($texto);
            var_dump($conversaoTexto);

            # COnversão de arrays

            $names = ['Hiago', 'karlla','Maria'];
            var_dump($names);
            echo "</br>";
            $stringArray = implode(", ", $names);
            echo $stringArray;
            echo "</br>";

            $bool = false;
            echo (int)$bool;
        ?>
    </div>
</body>
</html>