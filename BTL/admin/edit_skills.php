<?php include('../functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Editing</title>
    <link rel="stylesheet" href="../admin-style.css"/>
    </head>
    <body>
        <?php

        $STT=$_GET['STT'];
        $query=mysqli_query($db,"SELECT * FROM soft_skills");
        $row=mysqli_fetch_array($query);

        ?>
        <form method="POST" class="form">
            <h2>Edit</h2>
            <?php $results_soft = mysqli_query($db, "SELECT * FROM soft_skills WHERE STT='$STT'") ?>
			<?php while ($row = mysqli_fetch_array($results_soft)) { ?>
            <div class="input-group">
                <label>Skills:</label>
                <input type="text" value="<?php echo $row['skills']; ?>" name="skills">
            </div>
            <?php } ?>

            <input type = "button" onclick = "document.location.href = 'administrator.php';" value = "Back" name = "button" 
            style="color: black;" class = "btn btn-primary">
            <input type="submit" value="Update" name="update_user" class = "btn btn-primary">

            <?php
                if (isset($_POST['update_user']))
                {   
                    $STT=$_GET['STT'];
                    $skills=$_POST['skills'];
                    $sql = "UPDATE `soft_skills` SET skills='$skills' WHERE STT='$STT'";
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