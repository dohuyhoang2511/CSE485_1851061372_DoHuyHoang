<?php include('../functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Editing</title>
    <link rel="stylesheet" href="../admin-style.css"/>
    </head>
    <body>
        <?php

        $id_introduce=$_GET['id_introduce'];
        $query=mysqli_query($db,"SELECT * FROM introduce,social_link");
        $row=mysqli_fetch_array($query);

        ?>
        <form method="POST" class="form">
            <h2>Edit</h2>
            <div class="input-group">
                <label>Name:</label>
                <input type="text" value="<?php echo $row['name']; ?>" name="name">
            </div>
            <div class="input-group">
                <label>Career:</label>
                <input type="text" value="<?php echo $row['career']; ?>" name="career">
            </div>
            <div class="input-group">
                <label>Introduce Message:</label>
                <input type="text" value="<?php echo $row['introduce_message']; ?>" name="introduce_message">
            </div>
            <div class="input-group">
                <label>Instagram Link:</label>
                <input type="text" value="<?php echo $row['instagram']; ?>" name="instagram">
            </div>
            <div class="input-group">
                <label>Facebook Link:</label>
                <input type="text" value="<?php echo $row['facebook']; ?>" name="facebook">
            </div>
            <div class="input-group">
                <label>Pinterest Link:</label>
                <input type="text" value="<?php echo $row['pinterest']; ?>" name="pinterest">
            </div>
            <div class="input-group">
                <label>Google Link:</label>
                <input type="text" value="<?php echo $row['google']; ?>" name="google">
            </div>

            <input type = "button" onclick = "document.location.href = 'administrator.php';" value = "Back" name = "button" 
            style="color: black;" class = "btn btn-primary">
            <input type="submit" value="Update" name="update_user" class = "btn btn-primary">

            <?php
                if (isset($_POST['update_user']))
                {
                    $id_introduce=$_GET['id_introduce'];
                    $name=$_POST['name'];
                    $career=$_POST['career'];
                    $introduce_message=$_POST['introduce_message'];
                    $instagram=$_POST['instagram'];
                    $facebook=$_POST['facebook'];
                    $pinterest=$_POST['pinterest'];
                    $google=$_POST['google'];
                
                    $sql_1 = "UPDATE `introduce` SET name='$name', career='$career', introduce_message='$introduce_message' WHERE id_introduce='$id_introduce'";
                    $sql_2 = "UPDATE `social_link` SET instagram='$instagram', facebook='$facebook', pinterest='$pinterest', google='$google' WHERE id_introduce='$id_introduce'";
                    if ($db->query($sql_1) === TRUE && $db->query($sql_2) === TRUE) 
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