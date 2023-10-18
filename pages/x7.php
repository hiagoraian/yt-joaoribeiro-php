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
        <h2>Propriedades de classes.</h2>
        <a href="../index.html">Voltar para a página incial</a>
    </div>
    <div class="container-block">
        <h3>Constantes.</h3>
        <p>São variáveis cujo valor atribuído na sua definição não podem ser alterado ao longo do script do PHP. O PHP permite definir constantes de duas formas: com o termo const e com o método define.</p>

        <?php 
            class Circulo {
                const PI = 3.14;
            }

            echo Circulo::PI;
            # É possível apresentar sem estânciar.  
        ?>
    </div>
    <div class="container-block">
        <h3>Classes abstratas.</h3>
        <p>Uma classe abstrata (classe base) é constituida por uma implementação parcial a partir das quais outras classes podem crescer. Quando uma classe é declarada como abstrada, isso significa que ela tem métodos incompletos que, obrigatoriamente têm que ser implementados nas classes que a herdam.</p>

        <?php 
        abstract class Animal {
            protected $name;

            public function  __construct($name)
            {
                $this->name = $name;
            }

            public function getName(){
                return $this->name;
            }

            abstract public function makeSound();
        }

        class Dog extends Animal {
            public function makeSound() {
                return 'Woof!';
            }
        }
        
        class Cat extends Animal {
            public function makeSound() {
                return 'Meow!';
            }
        }

        $dog = new Dog('Max');
        echo $dog->getName();  # Output: Max.
        echo $dog->makeSound();  # Output: Woof!
        echo "</br>";
        $cat = new Cat('Lucy');
        echo $cat->getName();  # Output: Lucy.
        echo $cat->makeSound();  # Output: Meow!

        # Em um projeto, deve está atento com nomes destinado a cada classe, pois é possível ter conflito.
        ?>
    </div>
    <div class="container-block">
        <h3>Traits.</h3>
        <p>São um grupo de métodos que podem ser inseridos dentro de classes. Foram adicionados à linguagem na sua versão 5.4 para aumentar a reutilização.</p>

        <?php 

            trait DadosDaTurma{
                
                public function turma($turma){
                echo "Aluno da turma: $turma";
                }
                
                public function ano($ano){
                echo "Aluno do ano: $ano"; 
                }
            }

            class Aluno{

                use DadosDaTurma; 

                protected $name;
                protected $sex;

                public function __construct($name, $sex)
                {
                    $this->name = $name;
                    $this->sex = $sex;
                }

                public function getDados(){
                    return $this->name . ' ' . $this->sex;
                }
            }

            $alunoHiago = new Aluno('Hiago', 'Masculino');
            echo $alunoHiago->getDados();
            echo "</br>";
            $alunoHiago->turma('Amora');
            echo "</br>";
            $alunoHiago->ano('8°');
        ?>
    </div>
</body>
</html>