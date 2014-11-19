<?php
try
{
$bdd=new PDO('mysql:host=localhost; dbname=test','root','');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$req=$bdd->prepare('INSERT INTO tchat(pseudo,msg) VALUES(?,?)');
$req->execute(array($_POST['pseudo'],$_POST['msg']));
$reponse=$bdd->query('SELECT pseudo,msg FROM tchat ORDER BY ID DESC LIMIT 0,100');

while($donnees=$reponse->fetch())
{
echo '<p><strong>'.$donnees['pseudo'].'</strong> : '.$donnees['msg'].'</p>';
}
header('Location:tchat.php');


$reponse->closeCursor();
?>