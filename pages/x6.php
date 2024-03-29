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
        <h3>Override.</h3>
        <p>Refere à capacidade de substituir ou modificar o comportamento de um método ou função definido em uma classe pai por uma implementação diferente em uma classe filha. Isso é parte do conceito de herança e polimorfismo na programação orientada a objetos.</p>
        <p>Quando uma classe filha herda de uma classe pai, ela automaticamente adquire todos os métodos e propriedades da classe pai. No entanto, às vezes é necessário modificar o comportamento de um método específico na classe filha, em vez de usar a implementação fornecida pela classe pai. É aí que entra a função de override.</p>
        <p>Para fazer um override em PHP, você precisa criar um método com a mesma assinatura (nome e parâmetros) na classe filha, que substituirá o método correspondente na classe pai. Ao chamar o método na instância da classe filha, a implementação do método na classe filha será executada em vez da implementação na classe pai.</p>

        <?php  
            class Pai {
                function saudacao(){
                    echo "Olá, sou o pai!";
                }
                public function boaNoite(){
                    echo "Boa noite!";
                }
            }
            
            # Para evitar um override, deve usar a expressão FINAL, ou não deixar a função pública.
            class Filho extends Pai{
                public function saudacao(){
                    echo "Olá, sou o filho!";
                }
            }

            $pai = new Pai();
            $pai->saudacao();
            echo "</br>";
            $filho = new Filho();
            $filho->saudacao();
            echo "</br>";
        ?>
    </div>
    <div class="container-block">
        <h3>Access levels public, protected e private.</h3>
        <p>São usadas para definir a visiabilidade de propriedades e métodos de uma classe.</p>
        <p>Public: Eles podem ser acessados de qualquer lugar. </p>

        <?php 
            class ExemploPublic{
                public $propriedadePublic;

                public function metodoPublic(){
                    echo $this->propriedadePublic . " Método public";
                }
            }

            $objetoPublic = new ExemploPublic();
            $objetoPublic->propriedadePublic = "Valor";
            $objetoPublic->metodoPublic();
            echo "</br>";
            echo "</br>";
        ?>
        <p>Protected: Eles só podem ser acessados dentro da própria classe ou em classes derivadas. Isso significa que esses elementos não são acessíveis a partir de instância direta da classe.</p>

        <?php 
            class ExemploProtected {
                protected $propriedadeProtected;
            
                protected function metodoProtected() {
                    echo "Método Protected.";
                }
            }
            
            class Subclasse extends ExemploProtected {
                public function outroMetodo() {
                    $this->propriedadeProtected = "Valor"; # Acesso à propriedade protegida na classe derivada.
                    $this->metodoProtected(); # Chamada do método protegido na classe derivada.
                }
            }
            
            $objeto = new ExemploProtected();
            # $objeto->propriedade = "Valor";  Erro! A propriedade protegida não é acessível diretamente.
            
            $subobjeto = new Subclasse();
            $subobjeto->outroMetodo(); # Acesso à propriedade protegida e chamada do método protegido na classe derivada.
            echo "</br>";
            echo "</br>";
        ?>
        <p>Private: Ele só pode ter acesso dentro da própria clase. Isso significa que não pode ser acessados de fora da claase nem por classes derivadas.</p>

        <?php 
            class ExemploPrivate {
                private $propriedadePrivate;
            
                private function metodo() {
                    # Implementação do método
                }
            }
            
            $objeto = new ExemploPrivate();
            # $objeto->propriedadePrivate = "Valor"; Erro! A propriedade privada não é acessível diretamente.
            # $objeto->metodo();  Erro! O método privado não é acessível diretamente.
            echo "</br>";
            echo "</br>";
        ?>

        <p>-> Use o modificador public quando você desejar que uma propriedade ou método seja acessível de qualquer lugar, tanto dentro da classe quanto por partes externas. Isso é útil para propriedades ou métodos que precisam ser amplamente utilizados e manipulados por outras partes do código. No entanto, tenha em mente que o uso excessivo de propriedades e métodos públicos pode comprometer o encapsulamento e a coesão da classe.</p>
        <p>-> Use o modificador protected quando você desejar restringir o acesso de uma propriedade ou método à própria classe e às suas classes derivadas (subclasses). Isso permite que as classes derivadas herdem e acessem esses elementos, enquanto ainda mantêm a restrição para partes externas. Esse tipo de acesso é útil quando você deseja fornecer uma interface controlada para as classes derivadas, permitindo que elas acessem e modifiquem certos membros internos.</p>
        <p>-> Use o modificador private quando você desejar restringir o acesso de uma propriedade ou método somente à própria classe. Isso significa que esses elementos não podem ser acessados de fora da classe nem por classes derivadas. O uso de propriedades e métodos privados é útil quando você precisa encapsular certos aspectos da implementação da classe e evitar a dependência direta de outras partes do código. Isso promove a segurança e a integridade interna da classe.</p>
    
        <?php
            class modificadoresTestes{
                public $varPublicMod;
                protected $varprotectedMod;
                private $varprivateMod;

                public function funPublic(){
                    echo "Publica";
                }
                
                protected function funProtected(){
                    echo "Protegida";
                }
                
                private function funPrivate(){
                    echo "Privata";
                }
            }
            class submodificadoresTestes extends modificadoresTestes{
                public function paraisofiscal(){
                    echo "Iniciando por aqui.";
                }

                public function chamarmetodoprotected(){
                    $this->funProtected();
                }
 
            }

            echo"</br>";
                $modTest1 = new submodificadoresTestes();
                $modTest1->paraisofiscal();
                $modTest1->funPublic();
                $modTest1->chamarmetodoprotected();
                
                # Para utilizar um método protegido, deve se criar uma fn na subclasse para acessar. Mas o método privado não é possível.
            echo"</br>";
        ?>

    </div>
    <div class="container-block">
            <h3>Getters e Setters</h3>
            <p>São métodos usados para acessar (get) e modificar (set) os valores de propriedades privadas ou protegidas de uma classe. Eles são uma prática comum na programação orientada a objetos para garantir um encapsulamento adequado e fornecer um controle mais preciso sobre o acesso dos dados.</p>
            <p>Dica: Sempre é bom verificar o tipo de valor que está sendo inserido, exemplo: Fazer um set para idade, e o usuário colocar um nome.</p>

            <?php 
                class ExemploGet {
                    private $propriedade = 'Hiago';

                    public function getPropriedades(){
                        return $this->propriedade;
                    }
                }

                $objetoGet = new ExemploGet();
                # echo $objetoGet->propriedade; Privado | Erro.
                echo $objetoGet->getPropriedades();
                echo "</br>";
            ?>
            <?php 
                class ExemploSet{
                    private $propriedade;
                    
                    public function setPropriedade($valor){
                        $this->propriedade = $valor;
                    }
                    public function getPropriedade(){
                        return $this->propriedade;
                    }
                }
                $objetoSet = new ExemploSet();
                # $objetoSet->propriedade = 'Hiago'; Privado | Erro.

                $objetoSet->setPropriedade("Karlla");
                echo $objetoSet->getPropriedade();
                echo "</br>";
            ?>
    </div>
    <div class="container-block">
        <h3>Static</h3>
        <p>Quando uma propriedade ou método é declarado como estático, ele pertence à classe em si, e não a uma instância especifica da classe. Isso significa que você pode acessar diretamente propriedades estáticos e chamar métodos estáticos sem a necessidade de criar um objeto da classe.</p>
        
        <?php 
            class ExemploStatic{
                static $propriedade = "Valor propriedade";
            }

            echo ExemploStatic::$propriedade;
            echo "</br>";
        ?>
        <p>Exemplo prático do uso de static.</p>

        <?php 
            class Operadores{
                static function numeroAleatorio($min, $max){
                    return rand($min, $max);
                }

                static function calcularFormula($a,$b){
                    return ($a*$b)+ ($b*$a);
                }
                static function criarNome(){
                    $nomes = ['João', 'Maria', 'Marcos','Mariana', 'Neuza', 'Isabela'];
                    $apelido = ['Silva','Pereira','Almeida','Oliveira'];

                    return $nomes[rand(0,count($nomes)-1)] . ' ' . $apelido[rand(0,count($apelido)-1)];
                }
            }

            echo Operadores::numeroAleatorio(1,20);
            echo "</br>";
            echo Operadores::calcularFormula(5,10);
            echo "</br>";
            echo Operadores::criarNome();
            ?>
    </div>
</body>
</html>