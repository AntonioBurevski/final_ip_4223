<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

</head>
<body>
<?php
$w = $h = NULL;

if (isset($_GET['w'])){
	$w = $_GET['w'];
}
if (isset($_GET['h'])){
	$h = $_GET['h'];
}
	



?>

<form action="dimensions.php" method="GET">
				Width: <input type="Text" name="width" id="w" value="<?php echo $w;?>" > <br>
				Height: <input type="Text" name="height" id="h" value="<?php echo $h;?>" > <br>
				<input type="submit" value="Enter">
</form>


<div style="width: <?php echo $w; ?>; height: <?php echo $h; ?>; background-color: 'black' "/div>


	
</body>
</html>