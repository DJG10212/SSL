<!--
Dakota Gillette
SSL 1512
12/11/15
-->

<?php

//api call
$content = file_get_contents('./fruitget.php');
//decode the results
$contents = json_decode($content);

var_dump($contents);



//Setup DB Username & Password
$user = 'root';
$pass = 'root';
$db   = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
   
//if post, capture user input and insert into db

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//add post data to the variables
	$fruitname  = $_POST['fruitname'];
	$fruitcolor = $_POST['fruitcolor'];
	$fruitimage = $_POST['fruitimage'];
	$stmt       = $db->prepare("INSERT INTO fruits (fruitname, fruitcolor, fruitimage) VALUES (:fruitname, :fruitcolor, :fruitimage);");
	//bind parameter to the variables, making them correlate with one another
	$stmt->bindParam(':fruitname', $fruitname);
	$stmt->bindParam(':fruitcolor', $fruitcolor);
	$stmt->bindParam(':fruitimage', $fruitimage);
	//execute the above process
	$stmt->execute();
}
?>

<!--HTML FORM FIELDS-->

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fruits DB App</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<section class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<h1>Dakota's Fruit Database App</h1>
					<p>Add all of your favorite fruits to our amazing fruit database!</p>
				</div>
				<div class="col-xs-5 col-xs-push-1">
					<form class="form well clearfix" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
						<div class="form-group">
							<label for="fruit-name">Fruit Name</label>
							<input type="text" name="fruitname" value="" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fruit Color</label>
							<input type="text" name="fruitcolor" value="" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Fruit Image</label>
							<input type="text" class="form-control" name="fruitimage" placeholder="Paste Image URL" required>
						</div>
						<button class="btn btn-primary pull-right" name="submit" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
    <center>
    <section>
		<div class="container">
			<div class="row">
            
            <!--week 3-->
           <div class="col-xs-4">
					<div class="page-header">
						<h3>Fruit of the Day</h3>
					</div>
                    <?php
						foreach ($contents->fruits as $fruit){
							echo $fruit->fruitColor;
							echo "<img src='".$fruit->fruitImage."'/>";
						}
					?> 
				</div>
				<div class="col-xs-8">
					<div class="page-header">
						<h3>All Fruit</h3>
					</div>
                    <!--end week 3-->
				<table class="table table-striped table-hover">
                <thead>
						<tr>
							<th>Fruit ID</th>
							<th>Fruit Name</th>
							<th>Fruit Color</th>
                            <th>Fruit Image</th>
							<th>Delete Fruit</th>
						</tr>
               </thead>
<!-- Query and print all fruit records/details from ssl database; plus provide delete link -->

<?php

//use pdo to setup a select statement
$stmt = $db->prepare('SELECT * FROM fruits order by fruitId	ASC;');
//execute the selection
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//for each row that is returned, echo out the id, name, and color, as well as provide delete link
foreach ($result as $row) {
	echo '<tr><td>' . $row['fruitId'] . '</td><td>' . $row['fruitName'] . '</td><td>' . $row['fruitColor'] . '</td><td>' . $row['fruitImage'] . ' </td><td><a href="deletefruit.php?id=' . $row['fruitId'] . '">Delete</a></td>';
}

?>
		</div>
	</div>
		</table>
  </section>
  </center>

</body>
</html>
