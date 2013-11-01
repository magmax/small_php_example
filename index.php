<html>
<body>


<h1>Tables</h1>

<ul>

<?php
$dbname = 'mysql';

if (!mysql_connect('localhost', 'root', 'secret')) {
    echo 'Could not connect to mysql';
    exit;
}

$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_row($result)) {
    echo "<li>Table: {$row[0]}</li>\n";
}

mysql_free_result($result);

?>

</ul>
</body>
</html>

