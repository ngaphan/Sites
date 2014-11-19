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
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>Geekstars/Accueil</title>
		<link rel="stylesheet" href="css/reset.css"/>
		<link rel="stylesheet" href="font/font.css"/>
		<link rel="stylesheet" href="css/foundation-icon.css"/>
		<link rel="stylesheet" href="css/base.css"/>
		<link rel="stylesheet" href="css/layout.css"/>
		<link rel="stylesheet" href="css/modules.css"/>
		<link rel="stylesheet" href="css/states.css"/>
		<link rel="stylesheet" href="css/theme.css"/>
		<link rel="stylesheet" href="css/responsive-61.25rem.css"/>
		<link rel="stylesheet" href="css/responsive-36.5rem.css"/>
		<link rel="stylesheet" href="css/responsive-28.5rem.css"/>
		<!--HTML5 shim , for IE6-8 , support of HTML5 elements-->
		<!--[if lt IE9]>
		<script src="http://html5shim.goolecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>
		<!--[if IE6]><body class="ie6 old_ie"><![endif]-->
		<!--[if IE7]><body class="ie7 old_ie"><![endif]-->
		<!--[if IE8]><body class="ie8"><![endif]-->
		<!--[if IE9]><body class="ie9"><![endif]-->
		<!--[if !IE9]><!--><body><!--><![endif]-->

	<body>		
		
		<header id="header">
			
			<div id="title-site">
				<img src="logo-geekstars.svg" />
			</div>		
			<nav class="nav-header">
				<ul>
					<li><a class="links" href="geek-profil.html">
							<img class="img-avatar" src="img/img3.jpg" alt= "avatar" /><?php echo $_POST["firstName"] ; ?> 
						</a>
					</li>
					<li><a class="links" href="http://localhost/BLOG/index.php">Blog</a></li>
					<li><a class="links" href="http://localhost/BLOGsv/index.php">Blogsv</a></li>					
					<li><a class="links" href="http://localhost/MINI_CHAT/chat.php">Chat</a></li>					
					<li><a class="links" href="http://localhost/MINI_CHAT/chatsv.php">Chatsv</a></li>					
					<li><a class="links" href="http://localhost/BLOG/index.php">Accueil</a></li>						
					<li><a class="links" href="#">Groupe des amis</a></li>
				</ul>
			</nav>	

			
		</header>

		<main class="content">

			<div class="nav-gauche" >

				<p> COMMUNICATIONS </p>
				<a class="links" href="personalInfo.html">
							<img class="img-avatar" src="img/img3.jpg" alt= "avatar" /><?php echo $_POST["firstName"] ; ?> 
				</a>
				<nav class="communications">
					<ul>
						<li><a class="links" href="http://localhost/BLOG/index.php">Blog</a></li>					
						<li><a class="links" href="#">Create your private blog</a></li>
						<li><a class="links" href="#">Current events</a></li>
						<li><a class="links" href="#">Find your friends</a></li>
					</ul>
				</nav>
			
				<nav class="groupes">
					<h6> GROUPES </h6>
					<ul>
						<li><a class="links" href="http://localhost/BLOG/index.php">Blog</a></li>					
						<li><a class="links" href="#">Create your private blog</a></li>
						<li><a class="links" href="#">Current events</a></li>
						<li><a class="links" href="#">Find your friends</a></li>
					</ul>
				</nav>
			

			
				<nav class="publication">
					<h6> RELAXATIONS </h6>
					<ul>
						<li><a class="links" href="http://localhost/BLOGsv/index.php">Games</a></li>					
						<li><a class="links" href="#"> Musics </a></li>
						<li><a class="links" href="#"> Films  </a></li>
						<li><a class="links" href="#"> Videos </a></li>
						<li><a class="links" href="#"> Photos </a></li>
					</ul>
				</nav>

				<nav class="Infomations">
					<h6> NEWS </h6>
					<ul>
						<li><a class="links" href="http://localhost/BLOG/index.php">Games</a></li>					
						<li><a class="links" href="#"> Le Figaro </a></li>
						<li><a class="links" href="#"> Le Monde </a></li>
						<li><a class="links" href="#"> JDD </a></li>
						<li><a class="links" href="#"> Direct Matin </a></li>
					</ul>
				</nav>

				<nav class="emploi">
					<h6> JOBS </h6>
					<ul>
						<li><a class="links" href="http://www.pole-emploi.fr/accueil"> ANPE </a></li>					
						<li><a class="links" href="#"> Entrprises </a></li>
						<li><a class="links" href="#"> Recruteurs </a></li>
						<li><a class="links" href="#"> Offre d'emploi </a></li>
						<li><a class="links" href="#"> Annonces </a></li>
					</ul>
				</nav>

				<nav class="justice">
					<h6> SERVICE PUBLIC </h6>
					<ul>
						<li><a class="links" href="http://vosdroits.service-public.fr/particuliers/N19807.xhtml"> Droits </a></li>					
						<li><a class="links" href="#"> Ecivains publiques </a></li>
						<li><a class="links" href="#"> Crèches </a></li>
						<li><a class="links" href="#"> Cliniques </a></li>
						<li><a class="links" href="#"> Mairies </a></li>
					</ul>
				</nav>

				

				<nav class="gouvernement">
					<h6> GOUVERNEMENT </h6>
					<ul>
						<li><a class="links" href="http://vosdroits.service-public.fr/particuliers/N19807.xhtml"> Droits </a></li>					
						<li><a class="links" href="#"> Ecivains publiques </a></li>
						<li><a class="links" href="#"> Crèches </a></li>
						<li><a class="links" href="#"> Cliniques </a></li>
						<li><a class="links" href="#"> Mairies </a></li>
					</ul>
				</nav>

				<nav class="transport">
					<h6>TRANSPORT </h6>
					<ul>
						<li><a class="links" href="http://vosdroits.service-public.fr/particuliers/N19807.xhtml"> SNCF </a></li>					
						<li><a class="links" href="#"> Info trafic </a></li>
						<li><a class="links" href="#">TAXIS </a></li>						
					</ul>
				</nav>

				<nav class="voyages">
					<h6>VOYAGES </h6>
					<ul>
						<li><a class="links" href="http://vosdroits.service-public.fr/particuliers/N19807.xhtml"> hotels </a></li>					
						<li><a class="links" href="#"> agenceS de voyages</a></li>
						<li><a class="links" href="#"> voyages pas cher </a></li>
						<li><a class="links" href="#"> AireFrance </a></li>
						<li><a class="links" href="#">VietnameAireline </a></li>
					</ul>
				</nav>

			</div>

			<section class="personal blog">

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
			</section>
		</main>
	</body>
</html>