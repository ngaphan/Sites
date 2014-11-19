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

?>


<p>Liste des  commentaires:</p>

<?php
try
{
$bdd = new PDO('mysql:host=localhost; dbname=test','root','');
}
catch(Exception $e)
{    
die('Erreur :'.$e->getMessage());
}

$req=$bdd->query('SELECT id,titre,contenu, DATE_FORMAT(date_creation,\'%d / %m / %Y  à %Hh %imin %ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0,5');

while($donnees=$req->fetch())

{
?>
<div class="all">
<h3>
<?php 
echo  htmlspecialchars(trim($donnees['titre']));?>
<em>  Le <?php echo htmlspecialchars(trim($donnees['date_creation_fr']));?></em>
</h3>


<p>
<?php
echo nl2br(htmlspecialchars(trim($donnees['contenu'])));
?>
</p>

<br/><br/>

<em>
<a href="commentaires.php?billet=<?php echo $donnees['id'];?>"><i>Commentaires</i></a>
</em>
<?php } 
$req->closeCursor();
?>


<p>
					<textarea class ="blog" rows="5" cols="50" placeholder = " Write your message here"></textarea>
				</p>
				
				<p>
					<input type="submit" name="sentForm" value="Publier" />				
				</p>
</div>

</body>
</html>