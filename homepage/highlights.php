<?php

//incudes
		include("includes/functions.php");	
		include("includes/network.php");	

$record = $_GET[record];

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
				while ($line = mysql_fetch_array($result_select, MYSQL_ASSOC)) {
						echo "\t<tr>\n";
						foreach ($line as $col_value) {
								echo "\t\t<td>$col_value</td>\n";
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
				while ($line = mysql_fetch_array($result_select, MYSQL_ASSOC)) {
						echo "\t<tr>\n";
						foreach ($line as $col_value) {
								echo "\t\t<td>$col_value</td>\n";
						}
						echo "\t</tr>\n";
				}
				echo "</table>\n";

	} 

// clean 
mysql_free_result($result);

// close 
mysql_close($link);

?>
