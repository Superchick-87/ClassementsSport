<?php
	function nomEquipe($tring){
		//////////////// RUGBY /////////////////
		$tring = str_replace("Bordeaux-Bègles","Bordeaux-B.",$tring);
		$tring = str_replace("Stade Français","S. Français",$tring);
		$tring = str_replace("Soyaux-Angoulême","S.-Angoulême",$tring);
		$tring = str_replace("Aix-en-Provence","Aix-en-Prov.",$tring);
		$tring = str_replace("Mont-de-Marsan","Mont-de-M.",$tring);
		$tring = str_replace("Aix-en-Provence","Aix-en-Prov.",$tring);
		$tring = str_replace("Valence-Romans","Valence-R.",$tring);

		//////////////// RUGBY /////////////////
		$tring = str_replace("Saint-Étienne","St-Étienne",$tring);
		return $tring;
	}
?>