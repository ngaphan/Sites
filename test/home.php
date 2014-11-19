 <?php

 if(isset($_GET['action'])===true && $_GET['action']==="modif")
 {
     echo '
    <form method="post" action="indexSV">
        <tr>
            <td>
                <input type="text" name="title"
                       value="'. $bookTitle .'" />
            </td>
            <td>
                <input type="text" name="authorName"
                       value="'.$authorName.'"/>
            </td>
            <td>
                <input type="submit" value=" METTRE À JOUR " />
                <input type="hidden" name="action" value ="update" />
            </td>
        </tr>
    </form>' ;
 }

?>
