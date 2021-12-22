<HTML> 
<HEAD> <TITLE> Логин </TITLE> </HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Введите логин: 
  <INPUT type="text" name="a" size="15"> 
  <INPUT type="hidden" name="h" value="Сунагатов"> 
  <INPUT type="hidden" name="h" value="Ильгиз"> 
  <INPUT type="hidden" name="h" value="Рафиль">
  <INPUT type="hidden" name="h" value="Suxarik"> 
  <P> <INPUT type="submit" name="obr" value="Проверить"> 
</FORM> 
<?php
if (isset($_POST["obr"])) { 
 if (($_POST["a"]=="Сунагатов")||($_POST["a"]=="Ильгиз")||($_POST["a"]=="Рафиль")||($_POST["a"]=="Suxarik")) { echo("Здравствуйте, " . $_POST["a"]); 
  } else { 
  	echo "Вы не зарегистрированный пользователь";
    }
    }
?>  
</BODY> 
</HTML>