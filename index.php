<!DOCTYPE html>
<html>
<head>
	<title>Laba3</title>
</head>
<body>
	<div>
		<?php
			$db = new mysqli("localhost", "root", "new-password", "media");
			if($db)
			{
				$sql = "SELECT * FROM data;";
				$datab = mysqli_query($db, $sql);
				while ($row = mysqli_fetch_assoc($datab)) 
				{
					$type = $row['type'];
					echo "<div>";
					if ($type == "video") 
					{
						echo "<video controls width=600>
							<source src=".$row['name']." type='video/mp4'/>
						</video>";
					}
					else if ($type == "audio") 
					{
						echo "<audio controls width=400>
							<source src=".$row['name']." type='audio/mpeg'/>
						</audio>";
					}
					else if ($type == "youtube") 
					{
						echo "<iframe width='640' height='480' src='".$row['name']."'></iframe>";
					}
					echo "</div>";
				}
			}
		?>
	</div>
</body>
</html>
