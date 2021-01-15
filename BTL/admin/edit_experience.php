<?php include('../functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Editing</title>
    <link rel="stylesheet" href="../admin-style.css"/>
    </head>
    <body>
        <?php

        $STT_experience=$_GET['STT_experience'];
        $query=mysqli_query($db,"SELECT * FROM experience");
        $row=mysqli_fetch_array($query);

        ?>
        <form method="POST" class="form">
            <h2>Edit</h2>
            <?php $results_soft = mysqli_query($db, "SELECT * FROM experience WHERE STT_experience='$STT_experience'") ?>
			<?php while ($row = mysqli_fetch_array($results_soft)) { ?>
            <div class="input-group">
                <label>Name:</label>
                <input type="text" value="<?php echo $row['experience_name']; ?>" name="experience_name">
            </div>
            <div class="input-group">
                <label>Time:</label>
                <input type="text" value="<?php echo $row['experience_time']; ?>" name="experience_time">
            </div>
            <div class="input-group">
                <label>Message:</label>
                <input type="text" value="<?php echo $row['experience_message']; ?>" name="experience_message">
            </div>
            <?php } ?>

            <input type = "button" onclick = "document.location.href = 'administrator.php';" value = "Back" name = "button" 
            style="color: black;" class = "btn btn-primary">
            <input type="submit" value="Update" name="update_user" class = "btn btn-primary">

            <?php
                if (isset($_POST['update_user']))
                {   
                    $STT_experience=$_GET['STT_experience'];
                    $experience_name=$_POST['experience_name'];
                    $experience_time=$_POST['experience_time'];
                    $experience_message=$_POST['experience_message'];
                    $sql = "UPDATE `experience` SET experience_name='$experience_name', experience_time='$experience_time', experience_message='$experience_message' WHERE STT_experience='$STT_experience'";
                    if ($db->query($sql) === TRUE) 
                    {
                        echo "Record updated successfully";
                    } 
                    else 
                    {
                        echo "Error updating record: " . $db->error;
                    }
                }
            ?>
        </form>
    </body>
</html>