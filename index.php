<html>
<head>
	<title>Pruebas</title>
</head>
<body>

	<?php

	include 'corredor.php';
	include 'caminador.php';
	?>

	<h1>Caminador</h1>
	<?php

	$per1=new Caminador();
	$per1->sprint()	;
	?>

	<h1>Corredor</h1>
	<?php

	$per1=new Corredor();
	$per1->sprint()	;
	?>



</body>
</html>
