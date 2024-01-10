<?php
function ChoixChampionnat($a){
  		if ($a == 'Ligue 1') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=1";
  		}
  		if ($a == 'Ligue 2') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=6";
  		}
  		if ($a == 'National') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=7";
  		}
  		if ($a == 'National 2') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=34";
  		}
  		if ($a == 'National 3') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=95";
  		}
  		if ($a == 'Coupe de France') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=8";
  		}
  		if ($a == 'Eliminatoires de la Coupe du monde') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=160";
  		}
  		if ($a == 'Ligue des Champions') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=20";
  		}
  		if ($a == 'Europa League') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=18";
  		}
  		if ($a == 'Euro') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=19";
  		}
  		if ($a == 'Trophée des Champions') {
  			return "https://www.sudouest.fr/idalgo/sport/cache/page/football_xml_standing.php?refProvider=0&refCompetition=23";
  		}
      if ($a == 'Top 14') {
        return "https://www.sudouest.fr/idalgo/sport/cache/page/rugby_xml_standing.php?refProvider=0&refCompetition=3";
      }
      if ($a == 'Pro D2') {
        return "https://www.sudouest.fr/idalgo/sport/cache/page/rugby_xml_standing.php?refProvider=0&refCompetition=7";
      }
  	}
?>