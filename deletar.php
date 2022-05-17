<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Deletar Registros</title>
</head>
<body>

<form method="post" name="dados" action="delete.php" onSubmit="return enviardados();">
  <fieldset>
    <legend>Suporte!</legend>
    <p>
    <label for="size_1">Id:</label>  
    <input type="text"  name="dados_id" id="dados_id" value="" />
    </p>

    <tr>
            <td height="22"></td>
            <td>
               <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
               <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
               <input name="Ler" type="submit" formaction="select.php" value="Ler"> 
               <input name="Deletarac" type="submit" formaction="delete.php" value="Deletar!"> 
               <input name="Atualizarr" type="submit" formaction="update.php" value="Atualizar"> 

            </td>
         </tr>
  </fieldset>
</form>

</body>
</html>