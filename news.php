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
    echo '<div class="hero-unit">';
	echo "<h2>$title</h2>";
	echo "<p>$header</p>";
    echo '<a class="btn btn-primary btn-large">Learn more</a>';
} 
mysql_close($link);
?>
