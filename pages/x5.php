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
        <p>Construtores são métodos especiais de uma classe que são automaticamente chamados quando um objeto da classe é criado. Eles permitem a inicialização e configuração inicial do objeto.</p>

        <?php 
            class SalaDeAula{
                private $aluno;
                private $turma;

                function __construct($n, $m)
                {
                    $this->aluno = $n;
                    $this->turma = $m;
                }

                public function fichaDoAluno(){
                    return "O Aluno " . $this->aluno . " é da turma " . $this->turma;
                }
            }

            $lider = new SalaDeAula("Hiago", "A");

            echo $lider->fichaDoAluno();
            echo"</br>";
        ?>

    </div>
    <div class="container-block">
        <h3>Property promotion.</h3>
        <p>Property promotion é uma característica introduzida no PHP 8.0 que simplifica a definição e inicialização de propriedades em classes. Anteriormente, era necessário definir explicitamente as propriedades em uma classe e, em seguida, criar um construtor para atribuir valores a essas propriedades. Com o property promotion, é possível definir e inicializar as propriedades diretamente na declaração da classe, sem a necessidade de um construtor separado.</p>

        <?php 
            class Pessoa {
                public function __construct(
                    private string $nome,
                    private int $idade,
                    private string $profissao
                ){}

                public function getNome(): string{
                    return $this->nome;
                }

                public function getIdade(): int{
                    return $this->idade;
                }

                public function getProfissao(): string{
                    return $this->profissao;
                }
            }

            $pessoa = new Pessoa('Hiago', 24,'Desenvolvedor');
            echo $pessoa->getNome();
            echo"</br>";
            echo $pessoa->getIdade();
            echo"</br>";
            echo $pessoa->getProfissao();
        ?>
    </div>
    <div class="container-block">
        <h3>Classes anônimas.</h3>
        <p>As classes anônimas no PHP são classes que não possuem um nome explicitamente definido. Elas são úteis quando você precisa criar uma classe temporária ou uma classe simples sem a necessidade de nomeá-la.</p>

        <?php 
            $classeAnonima = new class {
                public function saudacao() {
                   return "Olá, mundo!";
                }
             };
             
             echo $classeAnonima->saudacao();
        ?>
    </div>
    <div class="container-block">
        <h3>Herança em classes.</h3>
        <p>A herança em classes é um conceito fundamental da programação orientada a objetos que permite criar novas classes (chamadas de classes base ) com base em classes existentes. A herança permite que as subclasses herdem os atributos e métodos da classe base, facilitando a reutilização de código e a organização hierárquica das classes.</p>

        <?php 
            class Animal {
                public function __construct(public $nomeAnimal)
                {
                    $this->nomeAnimal = $nomeAnimal;
                }

                public function emitirSom(){
                    echo "O animal emite um som.";
                }
            }

            class Gato extends Animal{
                public function mia(){
                    echo "O gato miou.";
                }
            }

            $gato = new Gato("Rex");
            echo $gato->mia();
            echo "</br>";
            echo $gato->emitirSom();
        ?>
    </div>

</body>
</html>