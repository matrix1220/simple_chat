<?
if(isset($_COOKIE['login'])) {
 header('Location: /');
} elseif(isset($_GET['login'])) {
setcookie('login',$_GET['login']);
header('Location: /');
} else {?>
<form>
Ism:<input type="text" name="login"><br>
<input type="submit" />
</form>
<?}?>