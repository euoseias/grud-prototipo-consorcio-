

 
<?php
       //_______________________________________________________________________________________
      //                                   TABLE CONTROLE
     //__________________________________________________________________________________________ 
// Conectando ao banco de dados:
 include_once("conexao.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$cota = $_POST['cota'];
$valor = $_POST['valor'];
$situacao = $_POST['situacao'];

$strcon = mysqli_connect('localhost','root','','prototipo') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO consorcio VALUES ";
$sql .= "('$id','$nome', '$cota', '$valor','$situacao')"; 

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);


//echo "TABELA CONTROLE!<br>";
//echo "Cliente CADASTRO COM SUCESSO!<br>";
//echo "</br>";
?>


 <?php
 echo "Redirecionamento";  
 header("Location:cadastro.php");
  die(); 
?>

<?php
 error_reporting ( 0 );
?>


