<?php


    header('Content-Type:text/html;charset=utf-8');

    // voir si le formulaiore a été envoyé
    if(isset($_POST["firstName"])===true)
{
    /* lorsque ke les données du formulaure sont envoyé, un tab $_POST est crée
    av comme indice les atttr name des chamops du formulaure et comme valeu les valeur
    tapé ou sélectionner ds chacun de chammps (value)

    $_POST[
        "firstName" => "",
        "lastName"=>"",
        "phone"=>""
    ]

    */




     // affcihe le prénom de l'utilisateur
echo '<p>' ."\n";
echo '<p>Votre prénom est<strong>'.$_POST["firstName"].'</strong></p><br>';
echo '<p>Votre nom est<strong>'.$_POST["lastName"].'</strong></p>';
echo '<p>Votre phone<strong>'.$_POST["phone"].'</strong></p>';

}


    // on affiche le code html

echo ' <form name ="myForm" method="POST" action=""> ' ."\n" ;
echo '  <p> Entrer les infos </p>' ."\n" ;
echo '  <select name="civility">' ."\n" ;
echo '      <option name="">Civilité</option>'."\n";
echo '      <option name="Mlle">Mademoiselle</option>'."\n";
echo '      <option name="Mme">Madame</option>'."\n";
echo '      <option name="M">Monsieur</option>'."\n";
echo '<input name="firstName" type="text" placeholder="firstName"><br>'     ."\n" ;
echo '      <input name="lastName" type="text" placeholder="lastName"><br>' ."\n" ;
echo '     <input name="phone" type="number" placeholder="phone"><br>'      ."\n" ;



echo '     <input type="submit" value="envoyer"><br>'      ."\n" ;

echo ' </form> '                                       ."\n" ;

?>