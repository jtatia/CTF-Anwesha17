<?php
require('../../flagcontroller.php');
mustLogin();
?>
<html>
<head><title>Proxy</title></head>
<body>
	Yooooo <br>
	Flag is 
<?php
	echo getFlag(7);
?>

</body>
</html>
