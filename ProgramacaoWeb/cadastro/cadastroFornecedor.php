<?php
    include_once 'classes/Banco.class.php';
    
    $bnc = new Banco;
    
    if($_GET[Op] == 1) {
        echo "<form action='cadastroFornecedor.php?Op=0' method='post'>";
            echo "<center><h2> Cadastro de Fornecedor </h2></center>";
            echo "<label class='lbl_nome'> Nome </label><input name='inp_nome' class='inp_nome' size=60> <br>";
            echo "<label class='lbl_tel'>Telefone</label><input name='inp_tel' class='inp_tel' size=60> <br>";
            echo "<label class='lbl_email'>Email</label><input name='inp_email' class='inp_email' size=60> <br>";
            echo "<br>";
            echo "<input type='submit' value='Confirmar' class='inp_confirmar'>";
            echo "<input type='reset' value='Limpar' class='inp_limpar'>";
        echo "</form>";
    }
    elseif($_GET[Op] == 0) {
        $SQL = "INSERT INTO tb_contato(nm_forncedor, tel_fornecedor, email_fornecedor) 
                VALUES('$_POST[inp_nome]', '$_POST[inp_tel]', '$_POST[inp_email]')";
        
        $bnc->Inserir($SQL);
        
        header("location:  ../index.php");
    }
?>
