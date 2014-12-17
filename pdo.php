
<?php
try {

    $dbh = new PDO("mysql:dbname=pdo;host=localhost", "root", "qburst" );

	$sql = "SELECT * FROM details";
	foreach ($dbh->query($sql) as $row){
		print $row['name'] .' - '. $row['age'] . '<br />';
	}

	$sql = "INSERT INTO details (name,age) values ('Saleem',50)";
	$dbh->exec($sql);

}
catch(PDOException $e){
	echo $e->getMessage();
}

?>