<?php
	$number = 12324325432;
	$original_string = strval($number);
	$result_string = "";
	while (strlen($original_string) > 3) {
		$result_string = "." . substr($original_string,strlen($original_string) - 3, 3) . $result_string;
		$original_string = substr($original_string, 0, strlen($original_string) - 3);
	}
	$result_string = $original_string . $result_string;
	echo($result_string);
?>