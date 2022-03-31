<?
$conn=mysql_connect('localhost','root','');
mysql_select_db('test');
if(isset($_GET['message']) and isset($_COOKIE['login']) and !empty($_GET['message'])) {
 mysql_query('INSERT INTO chat (name,value) VALUES ("'.$_COOKIE['login'].'","'.htmlentities($_GET['message']).'")',$conn);
}
?>