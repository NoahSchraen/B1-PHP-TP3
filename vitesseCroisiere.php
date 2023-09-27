<?php
	echo "Saisi la vitesse : ";
	$vitesseSaisie = rtrim(fgets(STDIN));
	if($vitesseSaisie <= 0){
		$vitesseSaisie = 0;
		echo "Vitesse : ", $vitesseSaisie , " noeuds\n";
	}
	else{
		echo "Vitesse : ", $vitesseSaisie , " noeuds\n";
	}
?>
