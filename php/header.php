<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sample PHP implementation of Manage Employee Data use case.">
    <title>Use Case &ndash; Manage Employee Data &ndash; Pure</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
	<link rel="stylesheet" href="css/layouts/side-menu.css">
</head>
<?php
ini_set('display_errors', 'On');

$logText = "";

function trace($text) {
	global $logText;
	$logText .= $text . '<br>';
}

trace("PHP version: " . phpversion());

if (!isset($_SESSION['controller'])) {
	$_SESSION['controller'] = new ManageEmployee;
	trace("new controller created and put in session");
} else {
	trace("controller already in session");
}
?>
