<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title></title>


</head>
<body>
 <?php
  $passo=(isset($_POST['passo'])? $_POST['passo']:'0');
  
 switch ($passo)
{
	case '0':
	{ ?>
<form method="POST" action="dataloc.php" name="form1"><br>

  <table style="width: 50%; text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">

    <tbody><tr align="center"><td colspan="2" rowspan="1">Consultar Dados
dos Clientes</td></tr>
       <tr><td style="text-align: center;">Selecionar cliente:</td>

        <td> <?php
        include('./conex.php');
        $query  = "select * from dados";
        $qw     = mysql_query($query);
        echo "<select name='id'>";
        while($linha = mysql_fetch_array($qw))
        {
        echo "<option value='$linha[idcliente]'>$linha[idcliente]&nbsp;$linha[1]</option>";}
?>
        </select></td> </tr><tr><td></td><input type="hidden" value="1" name="passo">
         <td><input value="&lt;&lt; consultar &gt;&gt;" type="submit"></td></tr></tbody>
  </table></form>
<?php
 	break;
	}
	case '1':
	{
$id = $_POST['id'];

 include('./conex.php');
   $query = "select * from dados where idcliente='$id'";
   $qs    = mysql_query($query);
   $linha = mysql_fetch_array($qs);
?>
  <table style="text-align: left; width: 50%;" align="center" border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td colspan="2" rowspan="1">Cadastro de usuário</td>
      </tr>
      <tr>
        <td>nome:</td>
        <td><input name="nome" value="<?php echo $linha[nome];?>"></td>
      </tr>
      <tr>
        <td>endere&ccedil;o:</td>
        <td><input name="end" value="<?php echo $linha[2];?>"></td>
      </tr>
      <tr>
        <td>telefone:</td>
        <td><input name="tel" value="<?php echo $linha[tel];?>"></td>
      </tr>
      <tr>
        <td><a href="index.php"  target="_self">Inicio</a></td><form action="dataloc.php" method="POST"  name="f2"><!-- form de envio ao voltar  -->
        <td><input type="hidden" value="0" name="passo">
		<input type='submit'  value='<< Nova Consulta >>'  ></form></td>
      </tr>
    </tbody>
  </table><?php break;
	}
}
?>
</body>
</html>
