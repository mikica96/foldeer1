<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php 

		$array=[5,43,5,6,7,7,7];

		if (count($array) > 0 ) {
			$sum=0;
			foreach ($array as $key) {
				$sum=$sum+$key;
			}
			echo $sum;
		}else{
			echo $sum=0;
		}
	 ?>
</body>
</html>
