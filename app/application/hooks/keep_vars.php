<?php

// Hack to get original essay content without XSS filters
function keep_vars($vars = array())
{
	if (empty($vars)) return;

	global $raw_input_data;

	$raw_input_data = array();

	foreach($vars as $var) {
		$raw_input_data = array_merge($raw_input_data, $var);
	}

	if (get_magic_quotes_gpc()) {
		foreach ($raw_input_data as &$value) {
			$value = stripslashes($value);
		}
	}
}