<?php 
  session_start();
  include_once 'includes/db_connect.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<h2 class="text-center text-light" style="margin-top: 10px;">Primetime</h2>
	<h3 class="text-center text-light" style="margin-top: -5px;">with</h3>

	<?php 
		$sql = "SELECT * FROM movies ORDER BY RAND() LIMIT 1";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<h1 class='bg-light text-center' style='margin-top: 25px; color: #2a0d39; padding: 10px;'><dt>".$row["title"]."</dt></h1>";
                echo "<div class='container'>";
                echo "<div class='embed-responsive embed-responsive-16by9'>";
                echo "<object class='embed-responsive-item' style='width: 100%; max-height: auto;'' data='http://www.youtube.com/v/".$row["link"]."' type='application/x-shockwave-flash'>
							<param name='src' value='http://www.youtube.com/v/".$row["link"]."' />
						</object>";
				echo "</div>";
				echo "<button type='button' class='btn btn-default text-center' style='width: 100%; margin-top: 10px; color: #2a0d39;' onClick='window.location.reload()'><dt>Refresh</dt></button>";
				echo "</div>";
            }
        }
	?>
		
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>