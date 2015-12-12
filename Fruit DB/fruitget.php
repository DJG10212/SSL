<!--
Dakota Gillette
SSL 1512
12/11/15
-->

<?php

//Setup DB Username & Password
$user   = 'root';
$pass   = 'root';
$dbh    = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

//randomly selects a different fruit to display
$stmnt = $dbh->prepare("SELECT fruitID, fruitName, fruitColor, fruitImage FROM fruits ORDER BY RAND() LIMIT 1");
$stmnt->execute();
// assign result to statement's fetchall indexed by column name
$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);
$result = array("fruits"=>$result);
// echo out json encoded result
header("Content-type:application/json");
$jsonfile = json_encode($result);
echo $jsonfile;

?>
