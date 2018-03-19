<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Answer</title>
</head>
<body>
<p>The answer is: 
<?php

$valeur1 = $_POST['first'] ; // c'est la valeur du textbox1
$valeur2 = $_POST['second'] ; // c'est la valeur du textbox2
$indicator = $_POST['group1']; // c'est la valeur de l'opération utilisé

//Fonction addition
if($indicator == 'ajout') {
	$result = $valeur1 + $valeur2 ;
echo "la valeur de la somme : $result";
}

//Fonction soustraction

if($indicator == 'soustraction') {
	$result = $valeur1 - $valeur2 ;
echo "la valeur de la soustraction : $result";
}

//Fonction multiplication

if($indicator == 'multi') {
	$result = $valeur1 * $valeur2 ;
echo "la valeur de la multiplication : $result";
}


?>
</p> 
</body>
</html>