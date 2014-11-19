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
