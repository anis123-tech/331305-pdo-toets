<?php  
	
	require"Connection.php";

	$sql = "SELECT * FROM pizza";
	$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
    <title>view</title>
    <meta name="description" content="Description">
    <meta name="keywords" content="Keywords" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</head>
<body>

<div class="row">
	<?php while ($row = $result->fetch_assoc()):?>
		<div class="col-md-2 mt-2"><?= $row["bodemformaat"]?></div>
		<div class="col-md-2 mt-2"><?= $row["saus"]?></div>
		<div class="col-md-2 mt-2"><?= $row["topping"]?></div>
		<div class="col-md-2 mt-2"><?= $row["kruiden"]?></div>
		<div class="col-md-2 mt-2"><form action="delete.php" method="POST"><button class="btn btn-danger" value="<?= $row['id']?>" type="submit" name="submit">Delete</button></form></div>
		<div class="col-md-2 mt-2">
			<form action="update.php" method="POST">
				<button class="btn btn-warning" type="submit">Update</button>
				<input type="hidden" value="<?= $row["id"]?>" name="id">
				<input type="hidden" value="<?= $row["bodemformaat"]?>" name="bodemformaat">
				<input type="hidden" value="<?= $row["saus"]?>" name="saus">
				<input type="hidden" value="<?= $row["topping"]?>" name="topping">
				<input type="hidden" value="<?= $row["kruiden"]?>" name="kruiden">
			</form>
		</div>
	<?php endwhile?>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>