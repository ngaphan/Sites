
<form action = "index.php" method = "POST">
    <p>
        <label name = "title"> Quelle tâche  ? </label>
        <input type = "text" name = "tache"/>
    </p>

    <p>
        <label for = "description"> détaillez la  : </label>
    </p>

    <p>
        <textarea name = "description" rows = "10" cols = "50"></textarea>
    </p>

    <p>
        <label> Quelle date ? </label>
        <input type = "date" name = "date"/>
    </p>
    <p>
        <label for = "priority">  Priorité : </label>
        <select name = "priority">
            <option value = ""></option>
            <option value = "1"> 1 </option>
            <option value = "2"> 2 </option>
            <option value = "3"> 3 </option>
            <option value = "4"> 4 </option>
        </select>
    </p>
    <p>
        <input type = "submit" name = "OK" value = "Valider" />
    </p>

</form>

