<?php
session_start();

$error=FALSE;

$pseudo=(isset($_POST['pseudo']))? htmlspecialchars(trim($_POST['pseudo'])):'';
$msg=(isset($_POST['msg']))? htmlspecialchars(trim($_POST['msg'])):'';

setcookie('pseudo',$pseudo,time()+24*3600,null,null,false,true);
setcookie('msg',$msg,time()+24*3600,null,null,false,true);

if(isset($_POST['submit']))
{
if(empty($pseudo) OR empty($msg)) $error=TRUE;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="html/text charset=utf-8"/>
	<title>Mini chat</title>
	<link rel="stylesheet" type="text/css" href="stylepn3.css"/>
</head>

<body>

<div id="conteneur">
<?php
if(isset($_POST['submit']) AND !$error)
{try
{
$bdd=new PDO('mysql:host=localhost; dbname=test','root','');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
$req=$bdd->prepare('INSERT INTO tchat(pseudo,msg) VALUES(?,?)');
$req->execute(array($_POST['pseudo'],$_POST['msg']));
header('Location:tchat.php');
}
else {
?>
		
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<!--Saisi pseudo et control pseudo-->
<div>
<label for="pseudo"><b>Pseudo :</b></label>
<input type="text" id="pseudo" name="pseudo" value="<?php 
if (isset($_COOKIE['pseudo']))echo $_COOKIE['pseudo'];?>"/><br/><br/>
<?php if($error AND empty($pseudo)):?>
	<div class="erreur">Veuillez entrer votre pseudo</div><br/><br/>	
<?php endif;?>
</div>


<!-- Saisi msg et control msg-->
<div>
<label for="message"><b>Message</b></label>
<textarea 	name="msg" cols=30 rows=5  
			placeholder="Ecire votre message ici">
</textarea><br/><br/>
<?php if($error AND empty($msg)):?>
	<div class="erreur">Veuillez entrer votre message</div><br/><br/>
<?php endif;?>
</div>

<div>
<label for="submit">&nbsp;</label>
<input type="submit" name="submit" value="Envoyer"/></div>
<?php } ; ?>
	</div>
</div>
</form>
<?php
try
{
$bdd=new PDO('mysql:host=localhost; dbname=test','root','');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
$reponse=$bdd->query('SELECT pseudo,msg FROM tchat ORDER BY ID DESC LIMIT 0,10');
while($donnees=$reponse->fetch())
{
echo '<p><strong>'.$donnees['pseudo'].'</strong> : '.$donnees['msg'].'</p>';
} 

$reponse->closeCursor();
session_destroy();
?>
</body>
</html>