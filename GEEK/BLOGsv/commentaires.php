<?php
include('header.php');
$req=$bdd->prepare('SELECT id,titre,contenu, DATE_FORMAT(date_creation,\'Le %d / %m /%Y  à %Hh : %imin : %ss) AS date_creation_fr FROM billets WHERE id=?');
$req->execute(array($_GET['billet']));

$donnees=$req->fetch();
if(!isset($_GET['billet']))echo'Le billet n\'existe pas';
else
{
?>
<!-- Affichage titre,contenu du billet-->
<div class="all">
<div>
<h3>
Sujet:<h3><?php echo htmlspecialchars($donnees['titre']);?> </h3>
<?php 
echo  htmlspecialchars($donnees['titre']);?>Le<em><?php echo htmlspecialchars($donnees['date_creation_fr']);?></em>
</h3>
</div>
<p>
<?php
echo nl2br(htmlspecialchars(trim($donnees['contenu'])));
?>
</p>
</div>
<p><h5>Les commentaires:</h5></p>
<?php  
}
$req->closeCursor();
?>
<!-- Affichage les commentaires du billet-->

<?php 

$req=$bdd->prepare('SELECT auteur,commentaire, DATE_FORMAT(date_commentaire,\'%d/ %m / %Y  à %Hh : %imin : %ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet=? ORDER BY date_commentaire');

$req->execute(array($_GET['billet'],$_GET['auteur']));

$donnees=$req->fetch();
if(!isset($_GET['billet']))echo'Le billet n\'existe pas';
else
{ 
//echo $_GET['billet'];}
?>
<p>

Auteur :<strong><?php echo htmlspecialchars($donnees['auteur']);?></strong>
Le <?php echo htmlspecialchars($donnees['date_commentaire_fr']);?>
</p>

<p>
<?php
echo nl2br(htmlspecialchars($donnees['commentaire']));?>
</p>



<br/><br/>
<em>
<a href="index.php"><i>Retours à la liste des commentaires</i></a>
</em>
<?php 
} 
$req->closeCursor();
?>
<?php
include('footer.php');
?>