<head>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="7">
<style>
table{background:#1F1F1F;width:537px;border:0;margin:0px auto 0;text-align:center;font-size:11px;border-collapse:collapse;border-spacing:0;color:#CCC}
table th{background:#474747;font-weight:normal;line-height:23px;font-size:11px;color:#FFF;}
table tr:nth-child(odd){background:#474747}
table td:nth-child(3){color:#DAA520}
table tr:hover{background:#73B1E0;color:#CCC;}
table td,table th{border:1px solid #000;}
</style>
</head>
<?
//error_reporting(0);
$conn = @mysql_connect("localhost", "user", "pwd") or die("Error!");
mysql_select_db("smshack", $conn);
mysql_query("set names 'utf8'");
$query=mysql_query("SELECT * FROM sms_data order by id desc limit 0,13");
if ($query){
	if (mysql_num_rows($query) >= 1){
		echo "<table><tr><th>From</th><th>To</th><th>Msg</th><th>Time</th></tr></thead>";
		while($row=mysql_fetch_array($query,MYSQL_ASSOC)){
			echo   "<tr><td>".$row['sms_from']."</td><td>".$row['sms_to']."</td><td>".$row['sms_message']."</td><td>".$row['time']."</td></tr>";
		}
		echo "</table><br/><br/><br/>";
	}
	mysql_free_result($query);
}
else
	echo "Error:$query:".mysql_error();
?>