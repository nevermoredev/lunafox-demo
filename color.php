
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/style/demo.css">
</head>
<body>
	<form action="result.php" method="POST"> 
	<?php
echo'<button class="color_pick" style="background-color:'.$_POST['bg'].'" >Cvet</button>';
?>
<button class="color_pick" style="background-color:yellow" >Cvet</button>
<textarea class="hiden" name="color" >yellow</textarea>
<input type="submit" name="view">
</form>
</body>
</html>