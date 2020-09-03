<html>
	<meta charset="utf-8">
<head>
<title>Tela de Vendas</title>

<P ALIGN=CENTER>--- FECHAMENTO DE VENDAS ---</P>

<body>

<?php
 
// recebe nome dos produtos

	$produto1 = isset($_POST["PRODUTO"]); 
	$produto2 = isset($_POST["PRODUTO1"]); 
	$produto3 = isset($_POST["PRODUTO2"]);
	$produto4 = isset($_POST["PRODUTO3"]);
	$produto5 = isset($_POST["PRODUTO4"]);
	$produto6 = isset($_POST["PRODUTO5"]);
	$produto7 = isset($_POST["PRODUTO6"]);
	$produto8 = isset($_POST["PRODUTO7"]);
	$produto9 = isset($_POST["PRODUTO8"]);
	$produto10 = isset($_POST["PRODUTO9"]);
	$produto11 = isset($_POST["PRODUTO10"]);
	$produto12 = isset($_POST["PRODUTO11"]);
								
	$condicao = $_POST["pagamento"];
	$parcela  = $_POST["Parcelas"];
	 
// declaracao de variaveis para receber total de valores de cada produtos
 
    $soma=0.00;
	$soma1=0.00;
	$soma2=0.00;
	$soma3=0.00;
	$soma4=0.00;
	$soma5=0.00;
	$soma6=0.00;
	$soma7=0.00;
	$soma8=0.00;
	$soma9=0.00;
	$soma10=0.00;
	$soma11=0.00;
     		

		
// calculo do qtde do produto		

?>

<TABLE BORDER=0 CELLSPACING=5 CELLPADDING=3 COLS=3 ALIGN=CENTER WIDTH=“100%" BGCOLOR="#FFFF99">

<TR><TD> Produto    </TD><TD> Preço ( R$ )    </TD><TD> Qtde.    </TD><td>Preco Total</td></TR>

<TR><TD>    </TD><TD>  </TD><TD>   </TD></TR>

<?php
			
	if ($produto1 == "op1" ) {
		 $qtde1 = $_POST["QTDE1"];
         $preco="19.90";
	     $soma=$preco*$qtde1;
		 ?><tr><td><?php echo "Camisa Regata"?></td><td><?php echo "19,90"?></td><td><?php echo $qtde1?></td><td><?php echo number_format($soma, 2, ',', '.')?></td></tr>;
		 <?php
    }  
    
	if ($produto2 == "op2" ) {
        $qtde2 = $_POST["QTDE2"];
        $preco="59.90";
	    $soma1=$preco*$qtde2; 
		?><tr><td><?php echo "Camisa Social"?></td><td><?php echo "59,90"?></td><td><?php echo $qtde2?></td><td><?php echo number_format($soma1, 2, ',', '.')?></td></tr>;
		<?php
	}
	
	if ($produto3 == "op3" ) {
        $qtde3 = $_POST["QTDE3"];
        $preco="119.90";
	    $soma2=$preco*$qtde3;
		?><tr><td><?php echo "Blusa"?></td><td><?php echo "119,90"?></td><td><?php echo $qtde3?></td><td><?php echo number_format($soma2, 2, ',', '.')?></td></tr>;
		<?php
	    
    }
	
	if ($produto4 == "op4" ) {
        $qtde4 = $_POST["QTDE4"];
        $preco="39.90";
	    $soma3=$preco*$qtde4;
		?><tr><td><?php echo "Pullover"?></td><td><?php echo "39,90"?></td><td><?php echo $qtde4?></td><td><?php echo number_format($soma3, 2, ',', '.')?></td></tr>;
		<?php
	    
    }
	
	if ($produto5 == "op5" ) {
        $qtde5 = $_POST["QTDE5"];
        $preco="99.90";
	    $soma4=$preco*$qtde5;
		?><tr><td><?php echo "Sapato"?></td><td><?php echo "99,90"?></td><td><?php echo $qtde5?></td><td><?php echo number_format($soma4, 2, ',', '.')?></td></tr>;
		<?php
	    
    }
	
	if ($produto6 == "op6" ) {
        $qtde6 = $_POST["QTDE6"];
        $preco="38.90";
	    $soma5=$preco*$qtde6;
		?><tr><td><?php echo "Calca"?></td><td><?php echo "38,90"?></td><td><?php echo $qtde6?></td><td><?php echo number_format($soma5, 2, ',', '.')?></td></tr>;
		<?php
	   
    }
	
	if ($produto7 == "op7" ) {
        $qtde7 = $_POST["QTDE7"];
        $preco="9.90";
	    $soma6=$preco*$qtde7;
		?><tr><td><?php echo "Meias"?></td><td><?php echo "9,90"?></td><td><?php echo $qtde7?></td><td><?php echo number_format($soma6, 2, ',', '.')?></td></tr>;
		<?php
	   
    }
	
	if ($produto8 == "op8" ) {
        $qtde8 = $_POST["QTDE8"];
        $preco="24.90";
	    $soma7=$preco*$qtde8;
		?><tr><td><?php echo "Luvas"?></td><td><?php echo "24,90"?></td><td><?php echo $qtde8?></td><td><?php echo number_format($soma7, 2, ',', '.')?></td></tr>;
		<?php
	    
    }
	
	if ($produto9 == "op9" ) {
        $qtde9 = $_POST["QTDE9"];
        $preco="329.90";
	    $soma8=$preco*$qtde9;
		?><tr><td><?php echo "Jaqueta"?></td><td><?php echo "329,90"?></td><td><?php echo $qtde9?></td><td><?php echo number_format($soma8, 2, ',', '.')?></td></tr>;
		<?php
	   
    }
	
	if ($produto10 == "op10" ) {
        $qtde10 = $_POST["QTDE10"];
        $preco="69.90";
	    $soma9=$preco*$qtde10;
		?><tr><td><?php echo "Bermuda"?></td><td><?php echo "69,90"?></td><td><?php echo $qtde10?></td><td><?php echo number_format($soma9, 2, ',', '.')?></td></tr>;
		<?php
	  
    }
	
	if ($produto11 == "op11" ) {
        $qtde11 = $_POST["QTDE11"];
        $preco="14.90";
	    $soma10=$preco*$qtde11;
		?><tr><td><?php echo "Chinelo"?></td><td><?php echo "14,90"?></td><td><?php echo $qtde11?></td><td><?php echo number_format($soma10, 2, ',', '.')?></td></tr>;
		<?php
	    
    }
	
	if ($produto12 == "op12" ) {
        $qtde12 = $_POST["QTDE12"];
        $preco="6.90";
	    $soma11=$preco*$qtde12;
		?><tr><td><?php echo "Bone"?></td><td><?php echo "6,90"?></td><td><?php echo $qtde12?></td><td><?php echo number_format($soma11, 2, ',', '.')?></td></tr>;
		<?php
	  
    }
	
// somatoria dos produtos	
	
    $subtotal=$soma+$soma1+$soma2+$soma3+$soma4+$soma5+$soma6+$soma7+$soma8+$soma9+$soma10+$soma11;
	?><tr><td><?php echo " "?></td><td><?php echo "SUBTOTAL :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($subtotal, 2, ',', '.')?></td></tr>;
	<?php
	
	
// calculo prestacoes
	
	if ($condicao=="A vista"){
		$desconto=($subtotal*0.085);
		$total=$subtotal-$desconto;
		?><tr><td><?php echo " "?></td><td><?php echo "DESCONTO 8,5 % :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($desconto, 2, ',', '.')?></td></tr>;
	    <?php
		?><tr><td><?php echo " "?></td><td><?php echo "TOTA A PAGAR   :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($total, 2, ',', '.')?></td></tr>;
	    <?php
		
	}	
	else {
        $juros=$subtotal*0.06;
        if ($parcela==2){
			$prestacao=($subtotal+$juros+13.80)/2;
			if ($prestacao<=10.00){
				$prestacao=($subtotal+$juros+6.90);
				?><tr><td><?php echo " "?></td><td><?php echo "V. UNICO A PAGAR :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($prestacao, 2, ',', '.')?></td></tr>;
	            <?php
			}
            else {
				?><tr><td><?php echo " "?></td><td><?php echo "2 Prestacoes de :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($prestacao, 2, ',', '.')?></td></tr>;
	            <?php
				
			}
		}	
		if ($parcela==3){
			$prestacao=($subtotal+$juros+20.70)/3;
			if ($prestacao<=10.00){
				$prestacao=($subtotal+$juros+6.90);
				?><tr><td><?php echo " "?></td><td><?php echo "V. UNICO A PAGAR :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($prestacao, 2, ',', '.')?></td></tr>;
	            <?php
				
			}
            else {
				?><tr><td><?php echo " "?></td><td><?php echo "3 Prestacoes de :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($prestacao, 2, ',', '.')?></td></tr>;
	            <?php
			}
		}		
        if ($parcela==4){
			$prestacao=($subtotal+$juros+27.60)/4;
			if ($prestacao<=10.00){
				$prestacao=($subtotal+$juros+6.90);
				?><tr><td><?php echo " "?></td><td><?php echo "V. UNICO A PAGAR :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($prestacao, 2, ',', '.')?></td></tr>;
	            <?php
				
			}
            else {
				?><tr><td><?php echo " "?></td><td><?php echo "4 Prestacoes de :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($prestacao, 2, ',', '.')?></td></tr>;
	            <?php
				
			}
		}        				
        if ($parcela==5){
			$prestacao=($subtotal+$juros+34.50)/5;
			if ($prestacao<=10.00){
				$prestacao=($subtotal+$juros+6.90);
				?><tr><td><?php echo " "?></td><td><?php echo "V. UNICO A PAGAR :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($prestacao, 2, ',', '.')?></td></tr>;
	            <?php
				
			}
            else {
				?><tr><td><?php echo " "?></td><td><?php echo "5 Prestacoes de :"?></td><td><?php echo "-----"?></td><td><?php echo number_format($prestacao, 2, ',', '.')?></td></tr>;
	            <?php
				
			}
		}   			
    }

?>

</table>
</body>
</html>