<html>
<body>


<h1>Tables</h1>

<ul>

<?php
$dbname = 'mysql';

$server = getenv('MYSQL_SERVER') ?: 'localhost';
$user = getenv('MYSQL_USER') ?: 'root';
$pass = getenv('MYSQL_PASSWORD') ?: 'secret';

$mysqli = mysqli_connect($server, 'root', 'secret');
if ($mysqli->connect_errno) {
    echo 'Could not connect to mysql';
    exit;
}

$sql = "SHOW TABLES FROM $dbname";
$result = $mysqli->query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = $result->fetch_row()) {
    echo "<li>Table: {$row[0]}</li>\n";
}

mysqli_free_result($result);

?>

</ul>
</body>
</html>
