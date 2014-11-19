
<?php foreach($bookTab as $lineArray): ?>

    <header><h1> My Library </h1></header>
    <table>
        <th> id     </th>
        <th> Titre  </th>
        <th> Auteur </th>
        <tr>
            <td><?= $bookTab[0] ?></td>
            <td><?=  $bookTab[1] ?></td>
            <td><?= $bookTab[2] ?></td>
            <td><a href = "index.php?action=modif&bookIndex='.$lineArray['book_id'].'"> Modifer</a></td>
            <td><a href = "index.php?action=del&bookIndex='.$lineArray['book_id'].'"> Supprimer</a></td>
        </tr>
<?php endforeach ?>



<section id="home">

    <form method="post" action="index.php">

        <p>
            <label for ="title" > Titre : </label>
            <input type="text" name="title"  value=""/>
        </p>

        <p> <label for ="author" > Auteur : </label>
            <input type="text" name="author"  value=""/>
        </p>

        <input type="submit" value="AJOUTER" />
        <input type="hidden" name="action" value="add" />

    </form>

</section>

<?php

if(isset($_GET['action'])===true && $_GET['action']==="modif")
{
    echo '
    <form method="post" action="">
        <tr>
            <td>
                <input type="text" name="title"
                       placeholder="'. $bookTitle .'" />
            </td>
            <td>
                <input type="text" name="authorName"
                       placeholder="'.$authorName.'"/>
            </td>
            <td>
                <input type="submit" value=" METTRE À JOUR " />
                <input type="hidden" name="action" value ="update" />
            </td>
        </tr>
    </form>' ;
}

?>
