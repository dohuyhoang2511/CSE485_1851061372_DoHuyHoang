<?php include('../functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Editing</title>
    <link rel="stylesheet" href="../admin-style.css"/>
    </head>
    <body>
        <?php

        $STT_education=$_GET['STT_education'];
        $query=mysqli_query($db,"SELECT * FROM education");
        $row=mysqli_fetch_array($query);

        ?>
        <form method="POST" class="form">
            <h2>Edit</h2>
            <?php $results_soft = mysqli_query($db, "SELECT * FROM education WHERE STT_education='$STT_education'") ?>
			<?php while ($row = mysqli_fetch_array($results_soft)) { ?>
            <div class="input-group">
                <label>Name:</label>
                <input type="text" value="<?php echo $row['education_name']; ?>" name="education_name">
            </div>
            <div class="input-group">
                <label>Time:</label>
                <input type="text" value="<?php echo $row['education_time']; ?>" name="education_time">
            </div>
            <div class="input-group">
                <label>Message:</label>
                <input type="text" value="<?php echo $row['education_message']; ?>" name="education_message">
            </div>
            <?php } ?>

            <input type = "button" onclick = "document.location.href = 'administrator.php';" value = "Back" name = "button" 
            style="color: black;" class = "btn btn-primary">
            <input type="submit" value="Update" name="update_user" class = "btn btn-primary">

            <?php
                if (isset($_POST['update_user']))
                {   
                    $STT_education=$_GET['STT_education'];
                    $education_name=$_POST['education_name'];
                    $education_time=$_POST['education_time'];
                    $education_message=$_POST['education_message'];
                    $sql = "UPDATE `education` SET education_name='$education_name', education_time='$education_time', education_message='$education_message' WHERE STT_education='$STT_education'";
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