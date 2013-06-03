<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
	    die('Bad news: ' . mysql_error());
}
mysql_select_db("blog");
$result = mysql_query("SELECT * FROM news");
while ($i = mysql_fetch_assoc($result)) {
	$title = $i['title'];
	$header = $i['header'];
	echo "<table>";
	echo "<tr><h1>$title</h1></tr>";
	echo "<tr> $header </tr>";
	echo "</table>";
} 
mysql_close($link);
?>
