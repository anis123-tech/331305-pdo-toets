<?php 

	if (isset($_POST['submit'])) {
		require "Connection.php";
		$formaat = $_POST["formaat"];
		$saus = $_POST["saus"];
		$topping = isset($_POST["topping"]) ? $_POST["topping"] : "";
		$topping = $topping =="on" ? "Topping1" : ""; 
		$topping2 = isset($_POST["topping2"]) ? $_POST["topping2"] : "";
		$topping2 = $topping2 =="on" ? "Topping2": ""; 
		$topping3 = isset($_POST["topping3"]) ? $_POST["topping3"] : "";
		$topping3 = $topping3 =="on" ? "Topping3" : ""; 
		$toppings = $topping . "," . $topping2 . ", " . $topping3;

		$kruiden = isset($_POST["kruiden"]) ? $_POST["kruiden"] : "";
		$kruiden = $kruiden =="on" ? "Kruiden" : ""; 
		$kruiden2 = isset($_POST["kruiden2"]) ? $_POST["kruiden2"] : "";
		$kruiden2 = $kruiden2 =="on" ? "Kruiden2" : ""; 
		$kruiden3 = isset($_POST["kruiden3"]) ? $_POST["kruiden3"] : "";
		$kruiden3 = $kruiden3 =="on" ? "Kruiden3" : "";

		$kruidens =  $kruiden . "," . $kruiden2 . ", " . $kruiden3;

		$sql = $conn->prepare('INSERT INTO pizza (bodemformaat, saus, topping, kruiden) VALUES (?,?,?,?)');
		$sql->bind_param('ssss', $bodemformaat, $saus, $topping, $kruidens);
		$sql->execute();
	
		
	
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <h1 class="text-center">Maak je eigen pizza</h1>
     <title>pizza</title>
     <meta name="description" content="Description">
     <meta name="keywords" content="Keywords" />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Cache-Control" content="max-age=31536000">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" type="text/css" href="./css/main.css"> -->
 </head>

 <style>
 	body {
 		min-width: 100vw;
 		min-height: 100vh;
 	}
 	.center {
 		height: 100vh;
 		display: flex;
 		align-items: center;
 		justify-content: center;
 	}
 </style>
 <body>

 	<div class="center">
 		<div class="col-md-4">
 			<div class="row">
 				<form method="POST">
 				<label>Formaten</label>
 				<select class="form-control" name="formaat" required>
 					<option>20</option>
 					<option>25</option>
 					<option>30</option>
 					<option>35</option>
 					<option>40</option>
 				</select>
 				<label>Sauzen</label>
 				<select class="form-control" name="saus" required>
 					<option>Tomaten saus</option>
 					<option>Extra tomaten saus</option>
 					<option>Spicy tomatewnsaus</option>
 					<option>bbq saus</option>
 					<option>creme fraiche</option>
 				</select>
 				<label>Toppings</label>
 				<div class="form-check">
  					<input class="form-check-input" type="radio" name="topping">
  					<label class="form-check-label">
    					vega
  					</label>
				</div>
				<div class="form-check">
  					<input class="form-check-input" type="radio" name="topping2">
  					<label class="form-check-label">
    					vegatarisch
  					</label>
				</div>
				<div class="form-check">
  					<input class="form-check-input" type="radio" name=topping3>
  					<label class="form-check-label">
    					vlees
  					</label>
				</div>
				<label>Kruiden</label>
				<div class="form-check">
 					<input class="form-check-input" type="checkbox" name="kruiden">
					<label class="form-check-label">
					    peterselie
					</label>
				</div>
				<div class="form-check">
 					<input class="form-check-input" type="checkbox" name="kruiden2">
					<label class="form-check-label">
					    Oregano
					</label>
				</div><div class="form-check">
 					<input class="form-check-input" type="checkbox" name="kruiden3">
					<label class="form-check-label">
					    chili flakes
					</label>
				</div>
				</label>
				</div><div class="form-check">
 					<input class="form-check-input" type="checkbox" name="kruiden3">
					<label class="form-check-label">
					    zwarte peper
					</label>
				</div>
				<button class="btn btn-block btn-info" type="submit" name="submit">Bestel</button>
				
			</form>
			<a href="./view.php"><button class="btn btn-block btn-info" name="submit">View</button></a>
 			</div>

 		</div>
 	</div>
 
 <!-- <script src="./js/main.js"></script> -->
 <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 </body>
 </html>