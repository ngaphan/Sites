 <?php

if($myconnexion = new mysqli("localhost" , "3wa" , "troiswa" ,"library"))
{
    if($myconnexion-> connect_errno)
    {
        echo "Erreur ! " ;
    }

    else
    {
        echo '<header><h1> My Library </h1></header>' ;
        echo '<table>' ;
        echo '  <th> id     </th>
                <th> Titre  </th>
                <th> Auteur </th>';

        $booksObj = $myconnexion->query('SELECT * FROM books');

        while($lineArray = $booksObj->fetch_array())
        {
            echo '<tr><td>' . $lineArray['book_id'] .'</td>'
                      .'<td>' . $lineArray['book_title'] .'</td>'
                      .'<td>' . $lineArray['author_name'] .'</td>'
                      .'<td><a href = "index.php?action=modif&bookIndex='.$lineArray['book_id'].'"> Modifer</a></td>'
                      .'<td><a href = "index.php?action=del&bookIndex='.$lineArray['book_id'].'"> Supprimer</a></td>'
                  .'</tr>';
        }

        echo '</table>' ;
    }
}

?>

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
