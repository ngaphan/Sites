<?php

    /**********GERER TOUTES LES ACTIONS *****************************/

    //control si l'utilisateur click sur "valider" et si son but est de faire"newTask"

    if(isset($_POST['action'])===true && $_POST['action']==="sentTask")

    // verifie si fichier existe ou pas , si oui faut tester la 2è condition
    // sinon , il saute tout suite cette etape et faire le code suivant
    // mais affcihie pas erreur , pas blocker le programme
    // au contraire si on met $_POST['action']==="sentTask" avant , si fichier
    // n'eswiste pas , il affcihe erreur fatal et arrêter le programme, on peut plus
    // rien faire'

    {

        //créer 1 array pr récupérer les champs du formualire

        $tasksArray = [
                        $_POST["title"] ,
                        $_POST["description"] ,
                        $_POST["date"] ,
                        $_POST["priority"]
        ]  ;

        saveToFile ("tasks.csv" , $tasksArray);
        // 2param : nom du fichier : "tasks.csv" , le contenu à save : $tasksArray

    }
    /*
     * "tasks.csv" = $filePath dans la function saveToFile ecrite ds utilities
     * $tasksArray = $dataTasksArray dans la function saveToFile ecrite ds utilities
     *
     */
?>



