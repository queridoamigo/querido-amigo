<?php

//incudes
		include("includes/functions.php");	
		include("includes/config.php");	

function getMainScore() {

//connect to db
$db = new dbConfig();
$db->getDbParams();

/*select main score*/

$result_select = getSelectMainScore($db);

$scoreTable = "";
// html
$scoreTable .= "<table id=\"scoreTable\" >\n";

$scoreTable .= "<tr><th>dkbbg</th><th>querido_amigo</th></tr>";

$data = array();

while ($row = mysqli_fetch_array($result_select, MYSQL_ASSOC)) {
	$data[$row['user']] = $row; 
}

$scoreTable .= "<tr>";

	foreach($data as $key => $value) {

		$scoreTable .= "<td id='".$value['user']."'>".$value['score']."</td>";

	}
$scoreTable .= "</tr>";

$scoreTable .= "</table>\n";

return $scoreTable;

}

function getLastGames() {
	
//connect to db
$db = new dbConfig();
$db->getDbParams();

/*select main score*/

$result_select = getSelectLastGames($db); 
$scoreTable = "";
// html
$scoreTable .= "<table id=\"lastGames\" >\n";

$scoreTable .= "<tr><th>dkbbg | querido_amigo</th></tr>";

$data = array();
$num = 0;

while ($row = mysqli_fetch_array($result_select, MYSQL_ASSOC)) {
	var_dump($row);
	$data[$num] = $row; 
	$num++;
}

	foreach($data as $key => $value) {

		$scoreTable .= "<tr><td>".$value['score']."</td></tr>";

	}

$scoreTable .= "</table>\n";

return $scoreTable;

}

function getMidScore() {

//connect to db
$db = new dbConfig();
$db->getDbParams();

/*select main score*/

$result_select = getSelectMidScore($db);

$scoreTable = "";
// html
$scoreTable .= "<table id=\"midScore\" >\n";

$scoreTable .= "<tr><th>dkbbg</th><th>querido_amigo</th></tr>";

$data = array();

while ($row = mysqli_fetch_array($result_select, MYSQL_ASSOC)) {
	$data[] = $row; 
}

$scoreTable .= "<tr>";

	foreach($data as $key => $value) {

		$scoreTable .= "<td id='D_mid'>".$value['D_mid']."</td>";
		$scoreTable .= "<td id='S_mid'>".$value['S_mid']."</td>";

	}
$scoreTable .= "</tr>";

$scoreTable .= "</table>\n";

return $scoreTable;

}

?>
