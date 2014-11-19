<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="html/text; charset=utf-8"/>
	<title>Mon blog </title>
	<link rel="stylesheet" type="text/css" href="blog.css"/>
</head>

<body>

<h1> Mon super blog !</h1>

<?php
try
{
$bdd = new PDO('mysql:host=localhost; dbname=test','root','');
}
catch(Exception $e)
{    
die('Erreur :'.$e->getMessage());
}