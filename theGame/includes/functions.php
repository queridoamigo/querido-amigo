<?php

function getSelectMainScore($param) {

		$dbParams = get_object_vars($param);

		$mysql_host = $dbParams['mysql_host'];
		$mysql_user = $dbParams['mysql_user'];
		$mysql_pass = $dbParams['mysql_pass'];
		$dbName = $dbParams['dbName'];
		$dbTable = $dbParams['dbTable'];

		//connect
		try {
			$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass)
				or die('connection error: ' . mysql_error());
		} catch(Exception $e) {
				echo $e->getMessage();
		}
		//select db
		mysqli_select_db($link, $dbName) or die('DB error');

		$query_select = 'SELECT winner as user, count(*) as score FROM ' .$dbTable. ' GROUP BY 1;';

		try {
			$result = mysqli_query($link, $query_select) or die('Request down: ' . mysql_error());
		} catch(Exception $e) {
				echo $e->getMessage();
		}

		return $result;

		// clean 
		if(isset($result)) { 
			mysqli_free_result($result);
		}

		// close 
		mysqli_close($link);

}

function getSelectLastGames($param) {

		$dbParams = get_object_vars($param);

		$mysql_host = $dbParams['mysql_host'];
		$mysql_user = $dbParams['mysql_user'];
		$mysql_pass = $dbParams['mysql_pass'];
		$dbName = $dbParams['dbName'];
		$dbTable = $dbParams['dbTable'];

		//connect
		$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass)
			or die('connection error: ' . mysql_error());
		//select db
		mysqli_select_db($link, $dbName) or die('DB error');

		$query_select = 'SELECT score FROM ' .$dbTable. ' ORDER BY DATE DESC LIMIT 5;';

		try {
			$result = mysqli_query($link, $query_select) or die('Request down: ' . mysql_error());
		} catch(Exception $e) {
				echo $e->getMessage();
		}

		return $result;

		// clean 
		if(isset($result)) { 
			mysqli_free_result($result);
		}

		// close 
		mysqli_close($link);

}

function getSelectMidScore($param) {

		$dbParams = get_object_vars($param);

		$mysql_host = $dbParams['mysql_host'];
		$mysql_user = $dbParams['mysql_user'];
		$mysql_pass = $dbParams['mysql_pass'];
		$dbName = $dbParams['dbName'];
		$dbTable = $dbParams['dbTable'];

		//connect
		$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass)
			or die('connection error: ' . mysql_error());
		//select db
		mysqli_select_db($link, $dbName) or die('DB error');

		$query_select = 'SELECT ROUND(sum(SUBSTRING_INDEX(score,":",1))/count(*),0) as D_mid, ROUND(sum(SUBSTRING_INDEX(score,":",-1))/count(*),0) as S_mid FROM '.$dbTable.';';

		try {
			$result = mysqli_query($link, $query_select) or die('Request down: ' . mysql_error());
		} catch(Exception $e) {
				echo $e->getMessage();
		}

		return $result;

		// clean 
		if(isset($result)) { 
			mysqli_free_result($result);
		}

		// close 
		mysqli_close($link);

}

function getInsert($param, $name, $score) {

		$dbParams = get_object_vars($param);

		$mysql_host = $dbParams['mysql_host'];
		$mysql_user = $dbParams['mysql_user'];
		$mysql_pass = $dbParams['mysql_pass'];
		$dbName = $dbParams['dbName'];
		$dbTable = $dbParams['dbTable'];


		//connect
		$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass)
			or die('connection error: ' . mysql_error());
		//select db
		mysqli_select_db($link, $dbName) or die('DB error');

		//check user highest score
		$query_check_user = 'SELECT score FROM ' .$dbTable. ' WHERE name = '. $name .';';
		$result_check_user = mysqli_query($link, $query_check_user) or die('Request down: ' . mysql_error());
		$checkUser = mysqli_fetch_array($result_check_user);

		if($checkUser['score'] < $score) {
						//inserting new scores
			//TODO: INSERT
				$query_insert = '';

				try {
					$result = mysqli_query($query_insert) or die('Request insert down: ' . mysql_error());
				} catch(Exception $e) {
						echo $e->getMessage();
				}

		} 

		return $result;

		// clean 
		if(isset($result)) { 
			mysqli_free_result($result);
		}

		// close 
		mysqli_close($link);

}

?>
