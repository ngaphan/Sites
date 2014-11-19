<?php
echo '<pre>';
var_dump($_POST);
echo '<pre>';

if(isset($_POST['pseudo'])AND isset($_POST['msg']))
{
	if($_POST['pseudo']=='' AND $_POST['msg']==''
		{
		echo'<p>Veuillez entrer votre pseudo et votre message</p>' ;
		}
	if($_POST['pseudo']!='' AND $_POST['msg']=='' )
		{
		echo'<p>Vous avez envoyé un message vide. Voulez-vous renvoyer un autre message?</p>' ;
		}

	if($_POST['pseudo']=='' AND $_POST['msg']!='' )
		{
		echo'<p>Veuillez entrer votre pseudo </p>' ;
		}

	else {die(header('Location:ngatest2.php'));}
}
?>



