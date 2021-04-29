<html>
<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title>Aula de php</title>
</head>
<style>
  body{
    background-color:orange;
    color: black;
    background-position: center;
    background-repeat: no-repeat;
  }td{
    font-family: bebas neue;
  }
</style>
<body background="fundo.png">
<body>

<?php

$passo=(isset($_POST['passo'])? $_POST['passo']:'0');

switch ($passo)
{
  case '0':
  { ?>
<form method="POST" action="data.php" name="form1">
  <table style="text-align: left; width: 50%;" align="center" border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td colspan="2" rowspan="1" align="center">Cadastro de usu&aacute;rio</td>
      </tr>
      <tr>
        <td>nome:</td>
        <td><input name="nome"></td>
      </tr>
      <tr>
        <td>endere&ccedil;o:</td>
        <td><input name="end"></td>
      </tr>
      <tr>
        <td>telefone:</td>
        <td><input name="tel"></td>
      </tr>
      <tr><input type="hidden" value="1" name="passo">
        <td><input value="&lt;&lt; Resetar &gt;&gt;" type="reset"></td>
        <td><input value="&lt;&lt;  Registrar &gt;&gt;" type="submit"></td>
      </tr>
    </tbody>
  </table>
  <br>
</form>
<?php
  break;
  }
  case '1':
  {
$nome = $_POST['nome'];
$end  = $_POST['end'];
$tel  = $_POST['tel'];

include('./conex.php');

$query = "insert into dados values(null,'$nome','$end','$tel')";
$q1 = mysql_query($query);
?>


  <table style="text-align: left; width: 50%;" align="center" border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td colspan="2" rowspan="1" align="center">Dados do usu&aacute;rio cadastrado</td>
      </tr>
      <tr>
        <td>nome:</td>
        <td><input name="nome" value="<?php echo $nome;?>"></td>
      </tr>
      <tr>
        <td>endere&ccedil;o:</td>
        <td><input name="end" value="<?php echo $end;?>"></td>
      </tr>
      <tr>
        <td>telefone:</td>
        <td><input name="tel" value="<?php echo $tel;?>"></td>
      </tr>
      <tr>
        <td>&nbsp;</td><form action="data.php" method="POST"  name="f2"><!-- form de envio ao voltar  -->
        <td><input type="hidden" value="0" name="passo">
    <input type='submit'  value='<< voltar >>'  ></form></td>
      </tr>
       <tr>
        <td><a href="index.php"  target="_self">Inicio</a></td><form action="data.php" method="POST"  name="f2"><!-- form de envio ao voltar  -->
        <td><input type="hidden" value="0" name="passo">
      </tr>
    </tbody>
  </table>  
  <?php break;
  }
}
?>
</body> 
  

</html>
