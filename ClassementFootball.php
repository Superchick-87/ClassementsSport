<?php
$championnat = $_GET['championnat'];
$editeur = $_GET['editeur'];
include(dirname(__FILE__) . '/includes/ddc.php');
include(dirname(__FILE__) . '/includes/ChoixChampionnat.php');
// $url = ChoixChampionnat ($championnat);
$url = 'datas/DataClassementLigue1.xml';
$xml = simplexml_load_file($url);
?>
<!DOCTYPE html>
<html>

<head>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/foot.css" rel="stylesheet">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="viewport" content="width=device-width" />
	<meta charset="utf-8">
	<title>Classement <?php echo $championnat . ' | ' . $xml->competition['numSeason']; ?> -</title>
</head>

<body>
	<div class="cartoucheHaut">
		<img class="logo" src="css/images/<?php echo ddc($championnat); ?>.png">
		<h1>> Classement <?php echo $championnat . ' | ' . $xml->competition['numSeason']; ?> << /h1>
				<h2>Journée <?php echo $xml->competition['numMatchday']; ?></h2>
				<hr>
				<select id="classement" onchange="myFunction()">
					<option value="General" selected="selected">Général</option>
					<option value="Domicile">Domicile</option>
					<option value="Exterieur">Exterieur</option>
				</select>
	</div>
	<!-- 	/////////////////////////////////////////////////
		//////////////////// GENERAL ////////////////////
		///////////////////////////////////////////////// -->
	<section id="General" style="display: block;">
		<table>
			<thead>
				<tr>
					<td></td>
					<td colspan="2"></td>
					<td class="colonne">Pts</td>
					<td class="colonne">J</td>
					<td class="colonne">G</td>
					<td class="colonne">N</td>
					<td class="colonne">P</td>
					<td class="colonne">p</td>
					<td class="colonne">c</td>
					<td class="colonne">Dif.</td>
				</tr>
			</thead>
			<tbody>
				<?php
				$n = 0;
				foreach ($xml->groupList->group->teamList->team as $DataClassements) {
					echo ' 
									<tr id="rang' . $n++ . '" class="Tableau TableauRang">
										<td>' . $DataClassements['numPosition'] . '</td>
										<td class="TableauEquipe gras" colspan="2"><img class="DrapeauxPetits" src="https://static.idalgo.info/Sport/Football/Team/Logo/40x40/logo_' . $DataClassements['refTeam'] . '.png" alt="' . $DataClassements['txtTeam'] . '">' . $DataClassements['txtTeam'] . '</td>
										<td class="gras">' . $DataClassements['numPoints'] . '</td>
										<td>' . $DataClassements['numPlayed'] . '</td>
										<td>' . $DataClassements['numWin'] . '</td>
										<td>' . $DataClassements['numDraw'] . '</td>
										<td>' . $DataClassements['numLost'] . '</td>
										<td>' . $DataClassements['numFor'] . '</td>
										<td>' . $DataClassements['numAgainst'] . '</td>
										<td>' . $DataClassements['numDif'] . '</td>
									</tr>';
				}
				// }
				// else{
				// 	echo ' oh oh ;-((';
				// }
				?>
			</tbody>
		</table>
	</section>
	<!-- 	/////////////////////////////////////////////////
		//////////////////// DOMICILE ////////////////////
		///////////////////////////////////////////////// -->
	<section id="Domicile" style="display: none;">
		<table>
			<thead>
				<tr>
					<td></td>
					<td colspan="2"></td>
					<td class="colonne">Pts</td>
					<td class="colonne">J</td>
					<td class="colonne">G</td>
					<td class="colonne">N</td>
					<td class="colonne">P</td>
					<td class="colonne">p</td>
					<td class="colonne">c</td>
					<td class="colonne">Dif.</td>
				</tr>
			</thead>
			<tbody>
				<?php
				$n = 0;
				foreach ($xml->groupListHome->group->teamList->team as $DataClassements) {
					echo ' 
									<tr id="rang' . $n++ . '" class="Tableau TableauRang">
										<td>' . $DataClassements['numPosition'] . '</td>
										<td class="TableauEquipe gras" colspan="2"><img class="DrapeauxPetits" src="https://static.idalgo.info/Sport/Football/Team/Logo/40x40/logo_' . $DataClassements['refTeam'] . '.png" alt="' . $DataClassements['txtTeam'] . '">' . $DataClassements['txtTeam'] . '</td>
										<td class="gras">' . $DataClassements['numPoints'] . '</td>
										<td>' . $DataClassements['numPlayed'] . '</td>
										<td>' . $DataClassements['numWin'] . '</td>
										<td>' . $DataClassements['numDraw'] . '</td>
										<td>' . $DataClassements['numLost'] . '</td>
										<td>' . $DataClassements['numFor'] . '</td>
										<td>' . $DataClassements['numAgainst'] . '</td>
										<td>' . $DataClassements['numDif'] . '</td>
									</tr>';
				}
				// }
				// else{
				// 	echo ' oh oh ;-((';
				// }
				?>
			</tbody>
		</table>
	</section>
	<!-- /////////////////////////////////////////////////
		//////////////////// EXTERIEUR ////////////////////
		///////////////////////////////////////////////// -->
	<section id="Exterieur" style="display: none;">
		<table>
			<thead>
				<tr>
					<td></td>
					<td colspan="2"></td>
					<td class="colonne">Pts</td>
					<td class="colonne">J</td>
					<td class="colonne">G</td>
					<td class="colonne">N</td>
					<td class="colonne">P</td>
					<td class="colonne">p</td>
					<td class="colonne">c</td>
					<td class="colonne">Dif.</td>
				</tr>
			</thead>
			<tbody>
				<?php
				$n = 0;
				foreach ($xml->groupListAway->group->teamList->team as $DataClassements) {
					echo ' 
									<tr id="rang' . $n++ . '" class="Tableau TableauRang">
										<td>' . $DataClassements['numPosition'] . '</td>
										<td class="TableauEquipe gras" colspan="2"><img class="DrapeauxPetits" src="https://static.idalgo.info/Sport/Football/Team/Logo/40x40/logo_' . $DataClassements['refTeam'] . '.png" alt="' . $DataClassements['txtTeam'] . '">' . $DataClassements['txtTeam'] . '</td>
										<td class="gras">' . $DataClassements['numPoints'] . '</td>
										<td>' . $DataClassements['numPlayed'] . '</td>
										<td>' . $DataClassements['numWin'] . '</td>
										<td>' . $DataClassements['numDraw'] . '</td>
										<td>' . $DataClassements['numLost'] . '</td>
										<td>' . $DataClassements['numFor'] . '</td>
										<td>' . $DataClassements['numAgainst'] . '</td>
										<td>' . $DataClassements['numDif'] . '</td>
									</tr>';
				}
				// }
				// else{
				// 	echo ' oh oh ;-((';
				// }
				?>
			</tbody>
		</table>
	</section>
	<!-- <button onclick="window.location.href='https://www.sudouest.fr/sport/resultats/'" target="_blank">Consulter tous les classements</button> -->
	<hr class="filetBas">
	<footer style="background-image:url(css/images/signature<?php echo $editeur; ?>.svg);"></footer>
</body>
<script type="text/javascript">
	function myFunction() {
		var General = document.getElementById('General');
		var Domicile = document.getElementById('Domicile');
		var Exterieur = document.getElementById('Exterieur');
		var selectclassement = document.getElementById('classement').value;

		if (selectclassement == 'General') {
			General.style.display = "block";
			Domicile.style.display = "none";
			Exterieur.style.display = "none";
		} else if (selectclassement == 'Domicile') {
			General.style.display = "none";
			Domicile.style.display = "block";
			Exterieur.style.display = "none";
		} else if (selectclassement == 'Exterieur') {
			General.style.display = "none";
			Domicile.style.display = "none";
			Exterieur.style.display = "block";
		}
		console.log(selectclassement);
	};
</script>
<script type="text/javascript">
	setInterval('window.location.reload()', 180000);
</script>

</html>