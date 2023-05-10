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
        <h2>Classes. </h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>Introdução a classes, propriedades e métodos.</h3>
        <p>Uma classe é uma estrutura fundamental usada para criar objetos. Uma classe é uma apresentação de um conceito ou entidade no código, que define as propriedades e os comportamentos que os objetos desse tipo podem ter.</p>
        <p>Uma classe é definida usando uma palavra-chave 'class', seguinda pelo nome da classe.</p>
        
        <?php 
            class Carro {
                #Propriedades:
                public $marca;
                public $modelo;
                public $ano;


                #Métodos
                public function acelerar(){
                    echo "O carro está acelerando!";
                }

                public function frear(){
                    echo "O carro está freando!";
                }
            }

            #Criando um objeto da classe carro.
            $meuCarro = new Carro();

            #Acessando as propriedades
            $meuCarro->marca = "Toyota";
            $meuCarro->modelo = "Corolla";
            $meuCarro->ano = 2023;

            #chamando um método
            $meuCarro->acelerar();
            echo "</br>";
        ?>

        <?php 
            class Trigonometria {

                public function triangulo($base, $altura){
                    return ($base * $altura)/2;
                }

                public function quadrado ($a){
                    return $a * $a;
                }
            }

            $quadrado = new Trigonometria();
            $triangulo = new Trigonometria();
            
           $resultTriangulo = $triangulo->triangulo(10,5);
           $resultQuadrado = $quadrado->quadrado(10);

           echo "A base do triangulo é: $resultTriangulo. A base do quadrado é $resultQuadrado.";
           echo "</br>";
        ?>
    </div>
    <div class="container-block">
        <h3>Criando um objeto.</h3>
        <p>Para aceder às propriedades de uma classe, dentro dos métodos da classe, é usado a pseudo variável $this seguida do operados sera -></p>

        <?php 
            class NomeCompleto{
                public $primeiroNome;
                public $segundoNome;


                public function nomeCompleto(){
                    return $this->primeiroNome . ' ' . $this->segundoNome;
                }
            }

            $name = new NomeCompleto();
            $name->primeiroNome = "Hiago";
            $name->segundoNome = "Raian";

            echo $name->nomeCompleto();
            echo "</br>";
            
        ?>
        <p>O $this é usada dentro de uma classe para referenciar o objeto atual, ou seja, o objeto que está sendo manipulado no momento. Por exemplo, no exemplo acima eu criei o objeto com o nome Hiago Raian, no return da função, estou usando o $this para manipular o dado que eu coloquei como primeiro nome e segundo, no caso, "Hiago" "Raian".</p>
    </div>

    <div class="container-block">
        <h3>Instanciação, construct e exemplos.</h3>
    </div>
</body>
</html>