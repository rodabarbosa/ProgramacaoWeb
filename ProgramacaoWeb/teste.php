<?php
     include_once 'classes/Banco.class.php';
     
     $bnc = new Banco;
     
     $SQL = "SELECT MAX(cd_fornecedor) FROM tb_fornecedor";
     foreach($bnc->Pesquisar($SQL) as $row) {
         $Res = $row[0];
     }
     
     echo $Res;
     
?>