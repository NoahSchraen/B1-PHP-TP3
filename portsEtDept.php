<?php
	echo "Saisir le nom du port : \n" ;
	$nomPort = rtrim(fgets(STDIN)) ;
	$nomDept = ["Morbihan", "Finistère", "Loire-Atlantique", "Vendée"] ;
	switch($nomPort){ 
		case "ile-d'yeu" :
			echo "Département : ", $nomDept[3], "\n" ;
			break ;
		case "pornic" :
			echo "Département : ", $nomDept[2], "\n" ;
			break ;
		case "piriac-sur-mer" :
			echo "Département : ", $nomDept[2], "\n" ;
			break ;
		case "douarnenez" :
			echo "Département : ", $nomDept[1], "\n" ;
			break ;
		case "concarneau" :
			echo "Département : ", $nomDept[1], "\n" ;
			break ;
		case "le palais" :
			echo "Département : ", $nomDept[0], "\n";
			break ;
		case "sauzon" :
			echo "Département : ", $nomDept[0], "\n";
			break ;
		case "quiberon" :
			echo "Département : ", $nomDept[0], "\n";
			break ;
		default :
		echo "Port non recensé. \n" ;
	} 

?>
