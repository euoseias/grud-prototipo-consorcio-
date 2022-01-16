<?php
 // Conectando ao banco de dados:
 include_once("conexao.php");
 
 // Recebendo os dados a pesquisar
 $pesquisa = $_POST['situacao'];
?>

 <html>
 <head>
 <link href="estilos.css" rel="stylesheet" type="text/css">
 <title>Resultado da pesquisa</title>
 </head>
 <body>
 
 <!-- Criando tabela e cabeçalho de dados: -->
 <table border="1" style='width:50%'>
 <tr>
 <th>Grupo</th>
 <th>nome</th>
 <th>cota</th>
 <th>Valor</th>
 <th>Situação</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 //$sql = "SELECT * FROM consorcio  WHERE situacao = 'pesquisa'";
$sql = "SELECT * FROM consorcio WHERE situacao = '$pesquisa'";
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
         echo "<td>".$valor."</td>";
           echo "<td>".$situacao."</td>";
            echo "</tr>";
 
 }
 mysqli_close($strcon);
 echo "</table>";
?>
</body>
</html>