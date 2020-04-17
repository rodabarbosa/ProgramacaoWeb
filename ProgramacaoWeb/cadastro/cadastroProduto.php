<?php
    include_once '../classes/Banco.class.php';

    $bnc = new Banco;
    
    if($_GET[Op] == 1) {
	  
        echo "<form action='cadastroProduto.php?Op=0' method='post'>";
	    echo "<center><h2> Cadastro de Produto </h2></center>";
            echo "<label class='lbl_nome'>Nome </label><input name='inp_nome' class='inp_nome' size=50> <br>";
            echo "<label class='lbl_tel'> Preço de custo </label><input name='inp_precoCusto' class='inp_tel' size=50> <br>";
            echo "<label class='lbl_email'> Preço de consumo </label><input name='inp_precoConsumo' class='inp_email' size=50> <br>";
            
            // combobox para selecionar o fornecedor
            echo "<label class='lbl_fornecedor'> Fornecedor </label>";
            echo "<select name='sel_fornecedor' class='sel_fornecedor'>";
	       $SQL = "SELECT * FROM tb_fornecedor ORDER BY nm_fornecedor";
	       
	       foreach($bnc->Pesquisar($SQL) as $Resultado) {
	           echo "<option value=$Resultado[0]> $Resultado[1] </option>";
	       }
	       
            echo "</select>";
            
            echo "<br>";
            echo "<input type='submit' value='Confirmar' class='inp_confirmar'>";
            echo "<input type='reset' value='Limpar' class='inp_limpar'>";
        echo "</form>";
    }
    elseif($_GET[Op] == 0) {
        $SQL = "INSERT INTO tb_contato(nm_produto, preco_compra, preco_venda) 
                VALUES('$_POST[inp_nome]', '$_POST[inp_precoCusto]', '$_POST[inp_precoConsumo]')";
        $bnc->Inserir($SQL);
        
        $SQL = "SELECT MAX(cd_produto) FROM tb_produto";
        foreach($bnc->Pesquisar($SQL) as $row) {
	  $Resultado = $row[0];
        }
        
        $SQL = "INSERT INTO tb_produto_fornecedor(tb_produto_cd_produto, tb_fornecedor_cd_fornecedor) VALUES($Resultado, $_POST[sel_fornecedor])";
        $bnc->Inserir($SQL);
        
        header("location: ../index.php");
    }
?>
