<?php include('../functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Editing</title>
    <link rel="stylesheet" href="../admin-style.css"/>
    </head>
    <body>
        <?php

        $query=mysqli_query($db,"SELECT * FROM soft_skills");
        $row=mysqli_fetch_array($query);

        ?>
        <form method="POST" class="form">
            <h2>Create</h2>
            <div class="input-group">
                <label>Skills:</label>
                <input type="text" value="" name="skills">
            </div>

            <input type = "button" onclick = "document.location.href = 'administrator.php';" value = "Back" name = "button" 
            style="color: black;" class = "btn btn-primary">
            <input type="submit" value="Create" name="create_user" class = "btn btn-primary">

            <?php
                if (isset($_POST['create_user']))
                {   
                    $skills=$_POST['skills'];
                    $sql = "INSERT INTO `soft_skills` VALUES ('','$skills') ";
                    if ($db->query($sql) === TRUE) 
                    {
                        echo "Record created successfully";
                    } 
                    else 
                    {
                        echo "Error creating record: " . $db->error;
                    }
                }
            ?>
        </form>
    </body>
</html>