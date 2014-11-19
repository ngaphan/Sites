http://www.adobe.com/fr/products/aftereffects.html

http://stackoverflow.com/questions/6693566/href-around-input-type-submit

www.codeshare.io/ctfxa



*********************************************


/*


<section id="home">

    <p class="top_right"><a class="button" href="index.php?action=newTask">+</a></p>

    <div id="tasks_list">
        <h2 class="urgent">URGENT</h2>
        <article>
            <span>HH:MM</span>
            <h3>TITRE</h3>
            <p>Extrait de la description...</p>
            <p>
                <a class="button_small" href="index.php?action=editTask">MODIFIER</a>
                <a class="button_small" href="index.php?action=deleteTask">SUPPRIMER</a>
            </p>
        </article>
    </div>

</section>jkjkljlkl
prout annal

<script>-->
    // On récupère l'ensemble des éléments HTML article,
    // qui correspondent à chacune de nos tâches,
    // sous la forme d'un objet DOM.
    // Ce qui nous renvoie un tableau listant des objects.
    var DOMObjectsArray = document.querySelectorAll("article");

    // On crée une boucle pour parcourir les éléments du tableaux
    for (var iPos=0; iPos<DOMObjectsArray.length; iPos++)
    {
        // On ajoute un "écouteur" de clic sur chacun des objets (les "article")
        DOMObjectsArray[iPos].addEventListener("click", showTask);
    }
    <!--
        function showTask()
        {
            // Si l'utilisateur clique sur une des tâches
            // on ouvre la tâche
            location.href = 'index.php?action=showTask';
        }
</script>

*/

**********************************

cours du mercredi 8 / 10 / 2014


/*
*dans Actions.php :
* SI on est sur la page d'acceuil , on appelle une function qui va ns retournert
* un tab de l'ensemble des taches

* dans utilities.php
* on écrit la function qui pêrmets de transformer le contenu de fichier "tasks.csv"
* en un tableau de tableau , en utilisant " fgetcsv "
*
* dans home.php
* qui avait que la structure HTML de la page
* on liste les ficher à partir dy tableau crée ds actions.php
*/



/*****************************************************************/
/**********************************************************************/

while(($fileLineArray=fgetcsv($handle)===true){}

//false=il arrive à la fin de fichier  égale à :

while($fileLineArray=fgetcsv($handle)){}


***********************************

if(isset($myVar)==true) égal à  if(isset($myVar))
if(isset($myVar)!=true) égal à  if(!isset($myVar))

les instruction  renvoir que true ou false , donc pas besoin de tester la valeur, le type,... donc c'est pas la peine de faire la "triple comparaison" === ou !==




"indice" => "valeur"

foreach( $array as $indice => $valeur ){}


faut savoir quel tache on doit effacer /modif -> faut ajouter un param dans url séparé av les autre param par & ( ex: dans home.php)

<a class="button_small" href="index.php?action=editTask&taskIndex=' + $index + '">MODIFIER</a>' . "\n";
echo '				<a class="button_small" href="index.php?action=deleteTask&taskIndex=' + $index + '">SUPPRIMER</a>' . "\n";


<a class="button_small" href="index.php?action=editTask&taskIndex=' . $index . '">MODIFIER</a>' . "\n";


resemble dans url on tape :

index.php?action=editTask&taskIndex=7(par ex)

il faut mettre les ligne header("location:index.php") en commentaire -> on va voir qu'il affiche ds barre d'adress




header est 1 fonction : modifier l'entete d'envoie . Cest une méthode : POST redirect GET


aller ds n'import quel site -> ctrl +shift + i = pr voir ce quil y a ds l'entete


header("Location:index.php") ;(server)
~ windows.location.href="index.php"(client)


l'ordre :

*reponse HTTP
*entete du fichier
*contenu du fichier



si php voir le header("Location:index.php"), il s'arrete à lentete por redigirer la page, C pas la peine de charger la page car de toutes les façons on affichie pas cette page

méthode : POST redirect GET

quand $_GET + $_POST , après avior traité les donnéees on redirige vers une url(get)

get : par default
post : lors de l'envoie du  formumlaire

il fo mettre header en deernier moment , après avoir ecrire toute la page , car des qu'on ecrir
 header , c'est envoyé tt suite sans queon fini écrire



******************************************


BASE DE DONNEES

PR Y ACCEDER NIMPORT OÙ DA LE MONDE
rechercher/ajouter/suppr 1 donnee vite
systeme relationnel
cest un ensemble de tabs


connection au BD

faut :
* adrress : localhost /
* nom d'utilisateur
* mdp


http : = port 80 (default)
https : = porte 443 (sécurisé )
mySQL : = porte 3306


mieux metre PHP et mySQL ds 2 server
198.32.32.32 dans url : ça passe plus vite quon tape le nom de domaine.car le temps de traduire du nom de domaine en decimal...
























