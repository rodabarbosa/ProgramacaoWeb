<!-- Stript HTML 5
 * Autor: Rodrigo Araujo Barbosa
 * Arquivo: index.php
 * Data: Março/2012
 * Modificado: Mês/Ano
 * Descrição: pagina inicial do projeto
-->

<!DOCTYPE html>
<html>
    <head>
	<!-- Sempre força a renderização do IE a versão mais recente (mesmo na intranet) & Chrome Frame
	     Remova esta linha se estver utilizando .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<meta http-equiv="pragma" CONTENT="no-cache" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Projeto PI</title>
        <link href="css/projetoPI.css" type="text/css" rel="stylesheet" media="all" />
        <script type="text/javascript" src="javascript/jquery.js"></script>
        <script type="text/javascript" src="javascript/jquery-ui-min.js"></script>
        <script type="text/javascript" src="javascript/pirobox_extended.js"></script>
        <script type="text/javascript" src="javascript/pirobox_usar.js"></script>
        <script type="text/javascript">
	    // carregar o menu no cabeçalho
	    $(document).ready(function() {
		  $("#lgn_cabecalho").load("interface/menu.php");
	    });
	    
	    // abrir as opções de cadastros na tela lateral
	    function cadastros() {
            $(document).ready(function() {
                $("#lgn_lateral").load("interface/menuCadastro.php");
            });
	    }

	    // abrir o script do rodapé no seu devido lugar
	    $(document).ready(function() {
		    $("#lgn_rodape").load("interface/rodape.php");
	    });
	    
        function cadastroContato() {
            $(document).ready(function() {
                $("#lgn_corpo").load("cadastro/cadastroContato.php?Op=1");
            });
        }
        
        function cadastroFornecedor() {
            $(document).ready(function() {
                $("#lgn_corpo").load("cadastro/cadastroFornecedor.php?Op=1");
            });
        }
        
        function cadastroProduto() {
            $(document).ready(function() {
                $("#lgn_corpo").load("cadastro/cadastroProduto.php?Op=1");
            });
        }
        </script>
    </head>
    <body>
	<div id="conteudo">

	      <legend id="lgn_cabecalho"></legend>
        
	      <legend id="lgn_lateral"></legend>
    
	      <legend id="lgn_corpo"></legend>
        
	      <legend id="lgn_rodape"></legend>
        </div>
    </body>
</html>
