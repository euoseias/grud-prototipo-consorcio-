
<?php
 error_reporting ( 0 );
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
                      </head>
                             <body><div class="form">
  <br/><h3>ATUALIZAR</h3>
  <div class="row">

      <div class="column">
        
              
          <form name="cadatro" action="atualizando.php" method="POST">
    
               <label>GRUPO:</label><br/>
               <input type="number" name="id_consorcio"  placeholder="Apagar um grupo"><br/><br/>

              <input type="submit"  value="Deletar"> 
                
</div>







 <div class="column">





<a href="cadastro.php" class="button button5">NOVO REGISTRO</a>
<a href="regular.php" class="button button2">REGULAR</a>
<a href="irregular.php" class="button button3">IRREGULAR</a>

<?php

//SOMA DO TOTAL DOS VALORES DA TABELA 
// Conectando ao banco de dados:
 include_once("conexao.php");
$sql = "SELECT SUM(valor) as soma FROM consorcio WHERE valor = valor";

 $resultado= mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

      // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   
   $soma = $registro['soma'];
            
 }
?>

<table id="tabela2">
    <tr>
        <th>Total R$</th>
    </tr>
    <tr>
       <td><?php echo "R$"." ".$soma;?></td>
    </tr>
  </table> 



</div>

</div>


</div>
</form>

     </body>
          </html>































<?php

          //_______________________________________________________________________________________
         //                              MOSTRANDO A TABELA 
        //__________________________________________________________________________________________ 
 // Conectando ao banco de dados:
 include_once("conexao.php");
 
 
?>

 <html>
 <head>
 <link href="tabela.css" rel="stylesheet" type="text/css">
 <title></title>
 </head>
 <body>
 
 <!-- Criando tabela e cabeçalho de dados: -->
 <table id="customers">
 <tr>
 <th>Grupo</th>
 <th>Nome</th>
 <th>Cota</th>
 <th>Valor</th>
 <th>Situação</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php

 /*pesquisando a situação de regulariade do cliente*/
 $sql = "SELECT * FROM consorcio";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
  
   //$ids= $registro['id_status'];
  // $id_status = $registro['situacao'];
   
  //_____________________________________________

   $id= $registro['id_consorcio'];
   $nome = $registro['nome'];
   $cota  = $registro['cota'];
   $valor = $registro['valor'];
   $situacao = $registro['situacao'];


   echo "<td>".$id."</td>";
    echo "<td>".$nome."</td>";
       echo "<td>".$cota."</td>";
         echo "<td>"."R$"." ".$valor."</td>";
           echo "<td>".$situacao."</td>";
            echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";
 //echo "<br><br><a href='cadastro.php'>Clique aqui para realizar uma consulta</a><br>";
?>
</body>
</html>

 <br/><br/>






