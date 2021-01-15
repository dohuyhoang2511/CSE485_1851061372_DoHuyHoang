<?php include('../functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Create</title>
    <link rel="stylesheet" href="../admin-style.css"/>
    </head>
    <body>
        <?php

        $query=mysqli_query($db,"SELECT * FROM experience");
        $row=mysqli_fetch_array($query);

        ?>
        <form method="POST" class="form">
            <h2>Create</h2>
            <div class="input-group">
                <label>Name:</label>
                <input type="text" value="" name="experience_name">
            </div>
            <div class="input-group">
                <label>Time:</label>
                <input type="text" value="" name="experience_time">
            </div>
            <div class="input-group">
                <label>Message:</label>
                <input type="text" value="" name="experience_message">
            </div>

            <input type = "button" onclick = "document.location.href = 'administrator.php';" value = "Back" name = "button" 
            style="color: black;" class = "btn btn-primary">
            <input type="submit" value="Create" name="create_user" class = "btn btn-primary">

            <?php
                if (isset($_POST['create_user']))
                {   
                    $experience_name=$_POST['experience_name'];
                    $experience_time=$_POST['experience_time'];
                    $experience_message=$_POST['experience_message'];
                    $sql = "INSERT INTO `experience` VALUES ('','$experience_name','$experience_time','$experience_message')";
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