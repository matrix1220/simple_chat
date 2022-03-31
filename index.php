<div id="chat"></div>
<!-- copythight  The Matrix -->
<!-- shoxsot bazburam bilmisan -->
<style>
#asdasdasd {
color:red;
-webkit-animation:asd 1s infinite;
-webkit-transform:scale(1);
}
@-webkit-keyframes asd {
 0%{
-webkit-transform:scale(1);
 }
 50% {
-webkit-transform:scale(1.2);
 }
 100% {
-webkit-transform:scale(1);
 }
}
</style>
<script>
var up=new EventSource('steam.php');
up.addEventListener('message',function(e) {
var d=document.createElement('div');
//console.log(e.data);
d.innerHTML=e.data;
document.getElementById('chat').appendChild(d);
if (document.getElementById('chat').getElementsByTagName('div').length>10) {
 var t=document.getElementById('chat').getElementsByTagName('div')[0];
 document.getElementById('chat').removeChild(t);
}
},false);
function sendMessage(value)
{
 var temp=value.message.value;
 value.message.value='';
  var x=new XMLHttpRequest();
  x.open('GET','/sendMessage.php?message='+temp,true);
  x.send();
}
</script>
<?
if(isset($_COOKIE['login'])) { ?>
<script>
function keydown(event) {
console.log(event);
}
</script>
<form>
<input type="text" name="message" onenter="keydown(event)">
<input type="button" onclick="sendMessage(this.form)" value="yozish">
</form><br>
<? } else {?>
<a href="login.php">login</a>
<? } ?>