<?php
    class Banco {
        public $Banco;
        public $Resultado;
        
        function CriarConexao() {
            return new PDO('mysql:host=127.0.0.1;port=3306;dbname=bd_projeto', 'root','');
        }

        function Inserir($Argumento) {
            try {
                // cria a conecxao com o banco de dados
                $Banco = CriarConexao() ;
                
                // executa a inserção dos dados
                $Banco->exec("$Argumento");
                
                // termina conecxao com o banco de dados
                $Banco = null;
            }
            catch(PDOException $e) {
                print "Error!!! <br>" . $e->getMessage();
                die();
            }
        }
            
        function Pesquisar($Argumento) {
            try {
                // cria a conecxao com o banco de dados
                $Banco = CriarConexao();
                
                // executa a inserção dos dados
                $Resultado = $Banco->query("$Argumento");
               
                // termina conecxao com o banco de dados
                $Banco = null;
                
                // retorna o resultado
                return $Resultado;
            }
            catch(PDOException $e) {
                print "Error!!! <br>" . $e->getMessage();
                die();
            }
        }
            
        function Deletar($Argumento) {
            try {
                // cria a conecxao com o banco de dados
                $Banco = CriarConexao() ;
                
                // executa a inserção dos dados
                $Banco->exec("$Argumento");
                
                // termina conecxao com o banco de dados
                $Banco = null;
            }
            catch(PDOException $e) {
                print "Error!!! <br>" . $e->getMessage();
                die();
            }
        }
    }
?>
