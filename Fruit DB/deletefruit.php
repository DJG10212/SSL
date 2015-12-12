<!--
Dakota Gillette
SSL 1512
12/6/15
-->

<?php

//Setup DB Username & Password
$user    = 'root';
$pass    = 'root';
$dbh     = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

//grabs the id that was sent through the url param  
$fruitid = $_GET['id'];

//prepares the delete statement
$stmt    = $dbh->prepare("DELETE FROM fruits where fruitId IN (:fruitid)");

//binds to our id variable
$stmt->bindParam(':fruitid', $fruitid);
//executes the deletion of the id
$stmt->execute();

//sends user back to the main fruits.php page
header('Location: fruitsads.php');

//ends the process
die();

?>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
        
?>