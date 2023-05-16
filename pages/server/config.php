<?php 
    echo "Eu fui incluido.";

    class Config{
        private $framework;

        public function __construct($framework)
        {
            $this->framework = $framework;
        }

        public function getFramework(){
            return $this->framework; 
        }
    }
?>