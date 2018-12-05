<!DOCTYPE html> <!--ehk HTML-5-->

<head>

</head>

<body>

<?php

	$hello="php harjutamine <br>";
	//muutujad on $ märgiga, JS olid needsamad var-ga//
	//echo on millegi välja toomine ehk kuvamine
	//toome 'hello' muutuja välja//
	echo "test $hello";
	
	$ageControl= 16;
	//vanusekontroll valimistel
	//nool enne võrdusmärki, võrdusmärk on kaasa arvatud vanus
	if ($ageControl <= 16) {
		
		echo "<strong>Sa ei ole valimisealine </strong>";
	}
	
		else{ echo "Sa oled valimisealine";
	}
	
	//WHILE ehk niikaua kui tingimus on tõene, jooksutab koodi. 
	// ++  ehk ta kasvatab seda numbrit
	
	$start = 1;
	while ($start<=10) {
		echo "Väljastatud number on $start <br>";
		$start++;
	}
	
	
	$dostart = 1;
	
	//do-while jooksutab koodi ning kontrollib kuni on tõene 
	do {
		echo "Väljastatud number on $dostart <br>";
		$dostart++;
	}
	//Siia while ei pea panema enam loogelisi sulge
	while ($dostart <=20);
	
	?>
	

</body>


</html>