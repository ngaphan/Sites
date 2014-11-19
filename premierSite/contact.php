
<h2>Contact</h2>

<hr>

<?php

if(isset($_POST['validerOK'])===true && $_POST['validerOK']=== 'formContactSent')
{
    print_r($_POST) ;

echo ' <br><br>'

        .   $_POST["civility"].' '.$_POST["prenom"].' '.$_POST["nom"].' , '
        .   '<br>'
        .   'Merci de nous avoir contacté .'
        .   '<br><br> Votre message : '
        .   $_POST["message"];
}

else{ ?>

    <form action="index.php?menu=contact" method="post">
        <p>
            <label for="civility"> Civilite</label>
            <select name="civility">
                <option name="Mme" checked> Madame</option>
                <option name="M"> Monsieur</option>
            </select>
        </p>

        <p>
            <label for="nom"  > Nom </label>
            <input name="nom" >     </input>
        </p>

        <p>
            <label for="prenom"> Prenom</label>
            <input name="prenom"></input>
        </p>

        <p>
            <label for="message"> Message</label>
            <textarea name="message" placeholder="Message" rows="5" cols="30">
            </textarea>
        </p>


        <!--créer un champs caché via l'utilisateur,pr voir si l'utilisateur a clicker              sur "valider" , s'en sert pour PHP lors du control
            if (isset[name=?]==="value=?-->

        <input type="hidden" name="validerOK" value="formContactSent" />

        <br>
        <p>
            <input type="submit" value="Valider" />  </input>
        </p>

    </form>


<?php } ?>