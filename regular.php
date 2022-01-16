<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    h3{text-align:left;
       font-family:Franklin Gothic Heavy;
       color:white;
      }
  </style>
</head>
<body>
<div class="form">
 <br/><h3>CLIENTES REGULARES</h3>
<div class="row">

      <div class="column">




<a href="cadastro.php" class="button button5">NOVO REGISTRO</a>
<a href="tabela.php" class="button button4">ADM</a>
<br><br>


</div>






<div class="column">



<?php
//TOTAL DE REISTRO MAIS PORCENTAGEM
// Conectando ao banco de dados:
 include_once("conexao.php");

$sql = "SELECT COUNT(id_consorcio) as soma FROM consorcio WHERE situacao = 'Regular'";

 $resultado= mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

      // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {

   $soma = $registro['soma'];
    if ($soma) {
      $var=($soma/100)*1000;
    }

     error_reporting ( 0 );


  // echo "TOTAL DE REGISTRO"." = "."  ".$soma;
   //echo "</br></br>";
  // echo "PORCENTAGEM"." = "."  ".$var."%";
   //echo "</br></br>";
 }
?>


<?php
//SOMA DO TOTAL DOS VALORES DA TABELA REGULAR
// Conectando ao banco de dados:
 include_once("conexao.php");
$sql = "SELECT SUM(valor) AS \"situacao\" FROM consorcio WHERE situacao = \"Regular\"";

 $resultado= mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

      // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $situacao= $registro['situacao'];
 //  echo "A SOMA DOS REGULAR R$".""."="."".$situacao;
  //echo $sql;
   //echo "</br></br>";
 }
 ?>


 <table id="tabela4">
    <tr>
        <th>TOTAL DE REGISTROS</th>
         <th>PORCENTAGEM</th>
          <th>TOTAL REGULAR R$ </th>
    </tr>
    <tr>
       <td><?php echo $soma;?></td>
       <td><?php echo $var."%";?></td>
        <td><?php echo "R$"." ". $situacao;?></td>
    </tr>
  </table>
  <br><br> 
</div>
</div>
</div>
</body>
</html>











































<?php
 // Conectando ao banco de dados:
 include_once("conexao.php");
 
 // Recebendo os dados a pesquisar
 //$pesquisa = $_POST['situacao'];
?>

 <html>
 <head>
 <link href="tabela.css" rel="stylesheet" type="text/css">
 <title>Resultado da pesquisa</title>
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
 //$sql = "SELECT * FROM consorcio  WHERE situacao = 'pesquisa'";
$sql = "SELECT * FROM consorcio WHERE situacao = 'Regular'";
$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {

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