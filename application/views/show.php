<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<?php foreach ($personal as $person) { ?>
		<p>Name:<?php echo $person['name']; ?></p>
		<p>Phone:<?php echo $person['phone']; ?></p>
		<p>Sex:<?php echo $person['sex']== '0' ? "Boy" : "Girl";?></p>
		<hr>
	<?php } ?>
</body>
</html>