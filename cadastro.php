
<!DOCTYPE html>
<html lang="pt-br">

<div class="header">

<head>

  <link href="1.css" rel="stylesheet" type="text/css"/>

    <style type="text/css">
    h2{text-align:left;
       font-family:Franklin Gothic Heavy;
       color:black;
      }
  </style>

  <meta charset="utf-8">
  <title>Clientes</title>
</head>


</div>


      <body>
         
        
         
        
          


<div class="row">
  <div class="column">


                <h2>Formulário de Cadastro de Clientes</h2>
                
              
              <form name="cadatro" action="cadastrar.php" method="POST">

               <label>Grupo:</label><br/>
               <input type="number"  name="id" placeholder="Não use numero negativo"><br>
    
               <label>Nome do Cliente:</label><br/>
               <input type="text" name="nome"  placeholder="Nome completo"><br>
    

                <label>Cota:</label><br/>
                <input type="text" name="cota"  placeholder="Informe a cota"><br>

                <label>Valor:</label><br/>
                <input type="text" name="valor"  placeholder="Informe o valor R$"><br>
                        

                  <p>Situação</p>
                 
                  <input type="radio" name="situacao"  value="Regular"> <label>Regular</label><br/>
                  
                  
                  <input type="radio" name="situacao" value="Irregular"><label>Irregular</label><br/><br/>
                   

            
            <input type="submit" value="Enviar">  <input type="reset" value="Apagar">

  

            </form>
          
          
</div>





           <div class="column">

              <br/><br/> <br/><br/> <br/><br/>   
             
              









<!DOCTYPE html>
<html>
<head>
  <link href="tabela.css" rel="stylesheet" type="text/css">
  <title></title>
</head>
<body>

<div class="form">
<a href="tabela.php" class="button button4">ADM</a>

<?php
//SOMA DO TOTAL DOS VALORES DA TABELA CONSORCIO
// Conectando ao banco de dados:
 include_once("conexao.php");
$sql = "SELECT SUM(valor) as soma FROM consorcio WHERE valor = valor";

 $resultado= mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

      // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $soma = $registro['soma'];
   //echo "TOTAL GERAL R$"."".$soma;
   echo "</br></br>";
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
  // echo "TOTAL REGULAR R$"."".$situacao;
  //echo $sql;
   //echo "</br></br>";
 }
 ?>


<table id="tabela4">
    <tr>
        <th>TOTAL R$</th>
         <th>TOTAL REGULAR R$</th>
          
    </tr>
    <tr>
       <td><?php echo "R$"." ".$soma;?></td>
       <td><?php echo "R$"." ".$situacao;?></td>
       
    </tr>
  </table>








<?php
//SOMA DO TOTAL DOS VALORES DA TABELA IRREGULAR
// Conectando ao banco de dados:
 include_once("conexao.php");
$sql = "SELECT SUM(valor) AS \"situacao\" FROM consorcio WHERE situacao = \"Irregular\"";

 $resultado= mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

      // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $situacao2= $registro['situacao'];
  // echo "TOTAL DE IRREGULAR R$".""."="."".$situacao2;
  //echo $sql;
   echo "</br></br>";
 }
 ?>





<?php
//TOTAL DE REISTRO MAIS PORCENTAGEM
// Conectando ao banco de dados:
 include_once("conexao.php");

$sql = "SELECT COUNT(id_consorcio) as soma FROM consorcio WHERE situacao = 'Irregular'";

 $resultado= mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

      // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {

   $soma = $registro['soma'];
    if ($soma) {
      $var=($soma/100)*1000;
    }
    error_reporting ( 0 );

   
   //echo "</br>";
   //echo "INADIPLÊNCIA"." = "."  ".$var."%";
  
 }
?>

<table id="tabela3">
    <tr>
        <th>INADIMPLÊNCIA</th>
         <th>TOTAL IRREGULAR R$</th>
          
    </tr>
    <tr>

       <td><?php echo $var."%";?></td>
       <td><?php echo "R$"." ".$situacao2;?></td>
      
    </tr>
  </table>
<br>
</div>
</body>
</html>























 </div>

    </div>
          

      </body>
      <div class="footer">
  <p>@técnico em tecnologia da informação</p>
</div>

</html>



