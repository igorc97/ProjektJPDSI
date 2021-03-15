<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x,&$y,&$z){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;

}

function validate(&$x,&$y,&$z,&$messages){
	if ( ! (isset($x) && isset($y) && isset($z))) {
		return false;
	}

	if ( $x == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano okresu';
	}
    if ( $z == "") {
        $messages [] = 'Nie podano oprocentowania';
    }
	if (count ( $messages ) != 0) return false;

	if (! is_numeric( $x )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	if (! is_numeric( $z )) {
	    $messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
    }

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$x,&$y,&$z,&$messages,&$result){
	global $role;

	$x = intval($x);
	$y = floatval($y);
	$z = intval($z);
	$miesiac = $y*12;
	$oproc = ($z/100)*$x;
	$oprocwskalimiesiaca = $oproc / $miesiac;
    $result =$x/$miesiac;
    $result = $result + $oprocwskalimiesiaca;

}

$x = null;
$y = null;
$z = null;
$result = null;
$messages = array();

getParams($x,$y,$z);
if ( validate($x,$y,$z,$messages) ) {
	process($x,$y,$z,$messages,$result);
}
include 'calckred_view.php';