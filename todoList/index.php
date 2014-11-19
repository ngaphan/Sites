<?php
    require_once 'utilities.php';
    require_once 'actions.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <meta name = "viewport" content = "width=device-width,user-scalable=0,                                                                  initial-scale=1" />
        <title>tasks Manager</title>
        <link rel = "stylesheet" href = "css/reset.css"/>
        <link rel = "stylesheet" href = "css/todoList.css"/>
    </head>


    <body>
        <header>
            <h1> Tasks Manager </h1>
        </header>


        <main class="formulaire">

            <?php
            // grace a method get on recupère les info

                if(isset($_GET['action'])===false)
                {
                    require_once"home.php" ;
                }
                elseif($_GET['action']==="newTask")
                {
                    require_once"new-task.php" ;
                }
                elseif($_GET['action']==="editTask")
                {
                    require_once"edit-task.php" ;
                }
                elseif($_GET['action']==="deleteTask")
                {
                    require_once"delete-task.php" ;
                }
                elseif($_GET['action']==="showTask")
                {
                    require_once"show-task.php" ;
                }
            ?>

        </main>

    </body>

</html>

