<?php
// Conectando ao banco de dados:
 include_once("conexao.php");

$strcon = mysqli_connect('localhost','root','','prototipo') or die('Erro ao conectar ao banco de dados
	requisitado');

$id = $_POST['id_consorcio'];

$sql = "DELETE FROM consorcio WHERE id_consorcio='$id'"; 
mysqli_query($strcon,$sql) or die ('Erro ao tentar excluir registro');
echo "Cliente excluído";
mysqli_close($strcon); 
?>

 <?php
 echo "Redirecionamento";  
 header("Location:tabela.php");
  die(); 
?>

<?php
 error_reporting ( 0 );
?>

