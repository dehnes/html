<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="styles.css">
	<script type="text/javascript" src="/webiopi.js"></script>
	<script type="text/javascript">
		webiopi().ready(function(){
			var button = webiopi().createGPIOButton(17,"Light");
			$("#controls").append(button);
			webiopi().refreshGPIO(true);
		});
	</script>
</head>
<body>

<form method="get" action ="index.php">
<table id="tbl_buttons">
	<tr><td><input type="submit" value=" Tor 1 " name="t1" class="btn-style"></td></tr>
	<tr><td><input type="submit" value=" Tor 2 " name="t2" class="btn-style"></td></tr>
	<tr><td><input type="submit" value=" Tor 3 " name="t3" class="btn-style"></td></tr>
</form>
<div id="controls" align="center"></div>
<?php
/* set GPIO modes to out */
$setmode16 = shell_exec("/usr/local/bin/gpio -g mode 16 out");
$setmode20 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
$setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
/* call function */
if(isset($_GET['t1'])){
	$gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 1");
	sleep(2);
	$gpio_off = shell_exec("usr/local/bin/gpio -g write 16 0");
	echo "Tor 1";
}
else if (isset($_GET['t2'])){
	$gpio_on = shell_exec("/usr/local/bin/gpio -g write 20 1")/
	sleep(2);
	$gpio_off = shell_exec("/usr/local/bin/gpio -g write 20 0");
	echo "Tor 2";
}
else if (isset($_GET['t3'])){
	$gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 1");
	sleep(2);
	$gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 0");
	echo "Tor 3";
}
?>
Test FTP
</body>
</html>
