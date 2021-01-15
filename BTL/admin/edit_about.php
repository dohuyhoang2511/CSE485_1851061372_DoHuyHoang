<?php include('../functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Editing</title>
    <link rel="stylesheet" href="../admin-style.css"/>
    </head>
    <body>
        <?php

        $id=$_GET['id'];
        $query=mysqli_query($db,"SELECT * FROM about,personal_information");
        $row=mysqli_fetch_array($query);

        ?>
        <form method="POST" class="form">
            <h2>Edit</h2>
            <div class="input-group">
                <label>Introduce Message 1:</label>
                <input type="text" value="<?php echo $row['introduce_1']; ?>" name="introduce_1">
            </div>
            <div class="input-group">
                <label>Introduce Message 2:</label>
                <input type="text" value="<?php echo $row['introduce_2']; ?>" name="introduce_2">
            </div>
            <div class="input-group">
                <label>Name :</label>
                <input type="text" value="<?php echo $row['name']; ?>" name="name">
            </div>
            <div class="input-group">
                <label>Gender:</label>
                <input type="text" value="<?php echo $row['gender']; ?>" name="gender">
            </div>
            <div class="input-group">
                <label>Date Of Birth:</label>
                <input type="text" value="<?php echo $row['date_of_birth']; ?>" name="date_of_birth">
            </div>
            <div class="input-group">
                <label>Address:</label>
                <input type="text" value="<?php echo $row['address']; ?>" name="address">
            </div>
            <div class="input-group">
                <label>Interest:</label>
                <input type="text" value="<?php echo $row['interest']; ?>" name="interest">
            </div>

            <input type = "button" onclick = "document.location.href = 'administrator.php';" value = "Back" name = "button" 
            style="color: black;" class = "btn btn-primary">
            <input type="submit" value="Update" name="update_user" class = "btn btn-primary">

            <?php
                if (isset($_POST['update_user']))
                {
                    $id=$_GET['id'];
                    $introduce_1=$_POST['introduce_1'];
                    $introduce_2=$_POST['introduce_2'];
                    $name=$_POST['name'];
                    $gender=$_POST['gender'];
                    $date_of_birth=$_POST['date_of_birth'];
                    $address=$_POST['address'];
                    $interest=$_POST['interest'];
                
                    $sql_1 = "UPDATE `about` SET introduce_1='$introduce_1', introduce_2='$introduce_2' WHERE id='$id'";
                    $sql_2 = "UPDATE `personal_information` SET name='$name', gender='$gender', date_of_birth='$date_of_birth', address='$address', interest='$interest' WHERE id='$id'";
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