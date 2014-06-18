<?php

require_once 'is_email.php';

/**
 *	Check for the existence some of the PHP filters
 *	If they don't exist recreate them so we can use them
 */
if(!defined('FILTER_VALIDATE_BOOLEAN')) define('FILTER_VALIDATE_BOOLEAN', 'FILTER_VALIDATE_BOOLEAN');
if(!defined('FILTER_VALIDATE_EMAIL')) define('FILTER_VALIDATE_EMAIL', 'FILTER_VALIDATE_EMAIL');
if(!defined('FILTER_VALIDATE_FLOAT')) define('FILTER_VALIDATE_FLOAT', 'FILTER_VALIDATE_FLOAT');
if(!defined('FILTER_VALIDATE_INT')) define('FILTER_VALIDATE_INT', 'FILTER_VALIDATE_INT');
if(!defined('FILTER_VALIDATE_REGEXP')) define('FILTER_VALIDATE_REGEXP', 'FILTER_VALIDATE_REGEXP');
if(!defined('FILTER_VALIDATE_URL')) define('FILTER_VALIDATE_URL', 'FILTER_VALIDATE_URL');

if(!defined('FILTER_SANITIZE_EMAIL')) define('FILTER_SANITIZE_EMAIL', 'FILTER_SANITIZE_EMAIL');
if(!defined('FILTER_SANITIZE_NUMBER_FLOAT')) define('FILTER_SANITIZE_NUMBER_FLOAT', 'FILTER_SANITIZE_NUMBER_FLOAT');
	if(!defined('FILTER_FLAG_ALLOW_FRACTION')) define('FILTER_FLAG_ALLOW_FRACTION', 'FILTER_FLAG_ALLOW_FRACTION');
if(!defined('FILTER_SANITIZE_NUMBER_INT')) define('FILTER_SANITIZE_NUMBER_INT', 'FILTER_SANITIZE_NUMBER_INT');
if(!defined('FILTER_SANITIZE_STRING')) define('FILTER_SANITIZE_STRING', 'FILTER_SANITIZE_STRING');
if(!defined('FILTER_SANITIZE_SPECIAL_CHARS')) define('FILTER_SANITIZE_SPECIAL_CHARS', 'FILTER_SANITIZE_SPECIAL_CHARS');
if(!defined('FILTER_SANITIZE_URL')) define('FILTER_SANITIZE_URL', 'FILTER_SANITIZE_URL');
if(!defined('FILTER_UNSAFE_RAW')) define('FILTER_UNSAFE_RAW', 'FILTER_UNSAFE_RAW');

if(!defined('FILTER_DEFAULT')) define('FILTER_DEFAULT', FILTER_UNSAFE_RAW);

if(!defined('INPUT_GET')) define('INPUT_GET', 'INPUT_GET');
if(!defined('INPUT_POST')) define('INPUT_POST', 'INPUT_POST');

/**
 *	Check if the filter_input and filter_var functions exist
 *	If they do not exist create them
 */
if(!function_exists('filter_input'))
{
	function filter_input($type, $variable_name, $filter = FILTER_DEFAULT, $options = array())
	{
		return filter_input_wrapper($type, $variable_name, $filter, $options);
	}
}

if(!function_exists('filter_var'))
{
	function filter_var($variable, $filter = FILTER_DEFAULT, $options = array())
	{
		return filter_var_wrapper($variable, $filter, $options);
	}
}


/**
 *	Mock replacement for filter_input
 *	Only supports INPUT_GET and INPUT_POST
 *	Will get the value out of $_GET or $_POST and sent it to filter_var for filtering
 */
function filter_input_wrapper($type, $variable_name, $filter = FILTER_DEFAULT, $options = array())
{
	$input = ($type === INPUT_GET) ? $_GET : $_POST;
	
	return isset($input[$variable_name]) ? filter_var_wrapper($input[$variable_name], $filter, $options) : null;
}

/**
 *	Mock replacement for filter_var
 *	Uses built in PHP functions or regular expressions to perform similar actions on the data
 */
function filter_var_wrapper($variable, $filter = FILTER_DEFAULT, $options = array())
{
	switch($filter)
	{
		case FILTER_SANITIZE_EMAIL:
			return preg_replace(">[^a-z0-9\!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\@\.\[\]]>iu", '', $variable);
			break;
		
		case FILTER_SANITIZE_NUMBER_FLOAT:
			$decimal = ($options == FILTER_FLAG_ALLOW_FRACTION) ? '\.' : '';
			return preg_replace('@[^\d\+\-' . $decimal . ']@', '', $variable);
			break;
		
		case FILTER_SANITIZE_NUMBER_INT:
			return preg_replace('@[^\d\+\-]@', '', $variable);
			break;
		
		case FILTER_SANITIZE_SPECIAL_CHARS:
			return htmlspecialchars($s, ENT_QUOTES, 'UTF-8', false);
			break;
		
		case FILTER_SANITIZE_STRING:
			return strip_tags($variable);
			break;
			
		case FILTER_SANITIZE_URL:
			return preg_replace(">[^a-z0-9\$\-\_\.\+\!\*\'\(\)\,\{\}\|\\\\^\~\[\]\`\<\>\#\%\"\;\/\?\:\@\&\=\.]>iu", '', $variable);
			break;
		
		case FILTER_VALIDATE_BOOLEAN:
			$input = (is_string($variable)) ? trim(strtolower($variable)) : $variable;
			
			if($input === 1 || $input === true)
				return true;
			
			return (bool)in_array($input, array('1', 'true', 'on', 'yes'));
			break;
		
		case FILTER_VALIDATE_EMAIL:
			return (bool)is_email($variable);
			break;
		
		case FILTER_VALIDATE_FLOAT:
			return (bool)is_numeric($variable);
			break;
			
		case FILTER_VALIDATE_INT:
			if(!is_numeric($variable) || floor($variable) != $variable)
				return false;
			
			$min_range = (isset($options['options']['min_range'])) ? $options['options']['min_range'] : null;
			
			if($min_range !== null && $variable < $min_range)
				return false;
			
			$max_range = (isset($options['options']['max_range'])) ? $options['options']['max_range'] : null;
			
			if($max_range !== null && $variable > $max_range)
				return false;
			
			return true;
			break;
		
		case FILTER_VALIDATE_REGEXP:
			return (bool)preg_match($options['options']['regexp'], $variable);
			break;
		
		case FILTER_VALIDATE_URL:
			return (bool)preg_match('@^[a-z][\w-]+:(?:/{1,3})?[^\s()<>]+(\.[^\s()<>]+(/[^\s]*)?)?$@iu', $variable);
			break;
			
		case FILTER_UNSAFE_RAW:
		case FILTER_DEFAULT:
		default:
			return $variable;
	}
}
