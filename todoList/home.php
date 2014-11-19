<section id="home">

    <p>
        <a href="index.php?action=newTask"><!--pr ouvrir le formulaire newTask-->
            <input type = "submit" value = "NOUVELLE TACHE" />
        </a>
    </p>

    <!--<p class="top_right"><a class="button" href= "index.php?action=newTask">+                   </a></p>-->


    <div id="tasks_list">

        <?php
        $nowDate = date("Y-m-d");
        $taskDateLast = "";

        foreach ($tasksDatesArray as $index => $taskDate)
        {
            echo '		<article>' . "\n";
            echo '			<span>HH:MM</span>' . "\n";
            echo '			<h3>' . $tasksArray[$index][0] . '</h3>' . "\n";
            echo '			<p>' . substr($tasksArray[$index][1], 0, 100).'[…]</p>'."\n";
            echo '			<p>' . "\n";
            echo '				<a class="button_small" href="index
                                        .php?action=editTask">MODIFIER</a>' . "\n";
            echo '				<a class="button_small" href="index
                                        .php?action=deleteTask">SUPPRIMER</a>' . "\n";
            echo '			</p>' . "\n";
            echo '		</article>' . "\n";
        }
        ?>


            <p>
                <a href = "index.php?action=editTask" >
                    <input type = "submit" name = "modify" value = "Modifier" />
                </a>

                <a href = "index.php?action=deleteTask" >
                    <input type = "submit" name = "delete" value = "Supprimer" />
                </a>
            </p>
        </article>
    </div>

</section>



<script>

    /*
     *  On récupère l'ensemle des lélements HTML 'article'
     *  qui correspondent à chacune de nos taches sous la form d'un obj DOM
     *  ce qui ns envoie 1 tab des taches
     */

    var DOMObjectsArray =document.querySelectorAll("article");

    // cré une boucle pr parcourir les éléments du tableau
    for(var iPos=0;iPos<DOMObjectsArray.length;iPos++)
    {
        // ajouter un "écouteur" de click sur chacun de obj ('les article')
        DOMObjectsArray[iPos].addEventListener("click",showTask);
    }

    function showTask()

    {
        //si l'utilisteeur click sur 1 tache -> ouvre la tache
        window.location.href = 'index.php?action=showTask';
        // attaché ) l'obj window permet de rediriger vers 1 page
    }


</script>

