
<form action = "index.php" method = "post">
    <p>
        <label for = "title"> Which task ? </label>
        <input type = "text" name = "title"/>
    </p>

    <p>
        <label for = "description"> Details  : </label>
        <textarea name = "description" rows = "10" cols = "30" ></textarea>
    </p>

    <p>
        <label> Date ? </label>
        <input type = "date" name = "date"/>
    </p>
    <p>
        <label for = "priority">  Priority : </label>
        <select name = "priority">
            <option value = ""></option>
            <option value = "Urgent"> Urgent </option>
            <option value = "Overdue"> Overdue </option>
            <option value = "Today"> Today </option>
            <option value = "Tomorrow"> Tomorrow </option>
            <option value = "Tomorrow"> Tomorrow </option>
        </select>
    </p>

    <p>
        <input type = "submit" value = "Valider" />
        <input type = "hidden" name = "action" value = "sentTask" />

    </p>

</form>
