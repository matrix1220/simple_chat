<?
header('content-type:text/event-stream');
ob_end_flush();
set_time_limit(0);
ob_implicit_flush(1);
$conn=mysql_connect('localhost','root','');
mysql_select_db('test');
$query=mysql_query('SELECT * FROM chat ORDER BY id DESC LIMIT 1',$conn);
$row=mysql_fetch_array($query,MYSQL_ASSOC);
//echo "data: asd"."\n\n";
$lastid=$row['id'];
echo 'data: '.$row['name'].':'.$row['value']."\n\n";
while(true) {
 $query=mysql_query('SELECT * FROM chat WHERE id>'.$lastid.' ORDER BY id',$conn);
 if($query) {
  while($row=mysql_fetch_array($query,MYSQL_ASSOC)) {
  $lastid=$row['id'];
  echo 'data: '.$row['name'].':'.$row['value']."\n\n";
  }
 }
 sleep(1);
}
?>