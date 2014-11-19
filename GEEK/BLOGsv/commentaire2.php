<?php
session_start();

$error=FALSE;

$pseudo=(isset($_POST['pseudo']))? htmlspecialchars(trim($_POST['pseudo'])):'';
$commentaire=(isset($_POST['commentaire']))? htmlspecialchars(trim($_POST['commentaire'])):'';

setcookie('pseudo',$pseudo,time()+24*3600,null,null,false,true);
setcookie('commentaire',$commentaire,time()+24*3600,null,null,false,true);

if(isset($_POST['submit']))
{
if(empty($pseudo) OR empty($msg)) $error=TRUE;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="html/text; charset=utf-8"/>
	<title>Mon blog </title>
	<link rel="stylesheet" type="text/css" href="blog.css"/>
</head>

<body>

<h1> Mon super blog !</h1>

<div id=news>
<h3> Bienvenu sur mon blog!<i> Le 25/03/2010 à 16h28min41s</i></h3>

<p>JE vous souhaite à toutes et à tous la bienvenue sue mon blog qui parlera de ... PHP biên sur!"</p><br/>

<div >
<h1> Mon super blog !</h1>

<div id=news>
<h3> Le PHP à la conquête du monde!<i> Le 27/03/2010 à 18h31min11s</i></h3>

<p>C'et officiel, léléPHPant a annoncé sur la radio hier  soir "J'ai l'intention de conquérir du monde!".</p>
<p>Il a en outre précisé que le monde serait à sa botte en moins de temps qu'il n'en fallait pour dire "éléPHPant". Pas dur, ceci dit entre nous...</p><br/>


<br/><br/>

<div >
<h1> Mon super blog !</h1>

<div id=news>
<h3> Le monde!<i> Le 20/03/2010 à 18h31min11s</i></h3>

<p>Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!!".</p>
<p>Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!!".</p><br/>
<p>Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!Le monde!!".</p><br/>

<br/><br/>

</body>
</html>