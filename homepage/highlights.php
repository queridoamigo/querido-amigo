<?php

//incudes
		include("includes/functions.php");	
		include("includes/network.php");	
		include("classes/config.php");	

$record = $_GET[record];

//connect to db
$db = new dbConfig();
$dbParams = $db->connectParams();

//check new record
	if($record == 'yes') {
				//get player data
				$name = '\''. substr( str_replace('\'','',$_GET[name]) , 0, 15) .'\'';
				$score = $_GET[score];

					//use functions to insert new recordds and select top-10
					$result_insert = getInsert($mysql_host, $mysql_user, $mysql_pass, $dbName, $dbTable, $name, $score);
					$result_select = getSelect($mysql_host, $mysql_user, $mysql_pass, $dbName, $dbTable);

				// html
				echo "<table id=\"scoreTable\" >\n";
				while ($row = mysql_fetch_array($result_select, MYSQL_ASSOC)) {
						echo "\t<tr id='$row[name]'>\n";
						foreach ($row as $key => $value) {
									echo "\t\t<td>$value</td>\n";
						}
						echo "\t</tr>\n";
				}
				echo "</table>\n";


	} else if($record == 'start') {
//show highscores at new game

				//select top-10
				$result_select = getSelect($mysql_host, $mysql_user, $mysql_pass, $dbName, $dbTable);

				// html
				echo "<table id=\"scoreTable\" >\n";
				while ($row = mysql_fetch_array($result_select, MYSQL_ASSOC)) {
						echo "\t<tr>\n";
						foreach ($row as $key) {
								echo "\t\t<td>$key</td>\n";
						}
						echo "\t</tr>\n";
				}
				echo "</table>\n";

	} 

?>
