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
        $query=mysqli_query($db,"SELECT * FROM contact");
        $row=mysqli_fetch_array($query);

        ?>
        <form method="POST" class="form">
            <h2>Edit</h2>
            <div class="input-group">
                <label>Name:</label>
                <input type="text" value="<?php echo $row['name']; ?>" name="name">
            </div>
            <div class="input-group">
                <label>Address:</label>
                <input type="text" value="<?php echo $row['address_contact']; ?>" name="address_contact">
            </div>
            <div class="input-group">
                <label>Phone Number:</label>
                <input type="text" value="<?php echo $row['phone_number']; ?>" name="phone_number">
            </div>
            <div class="input-group">
                <label>Email Contact:</label>
                <input type="text" value="<?php echo $row['email_contact']; ?>" name="email_contact">
            </div>

            <input type = "button" onclick = "document.location.href = 'administrator.php';" value = "Back" name = "button" 
            style="color: black;" class = "btn btn-primary">
            <input type="submit" value="Update" name="update_user" class = "btn btn-primary">

            <?php
                if (isset($_POST['update_user']))
                {
                    $id=$_GET['id'];
                    $name=$_POST['name'];
                    $address_contact=$_POST['address_contact'];
                    $phone_number=$_POST['phone_number'];
                    $email_contact=$_POST['email_contact'];
                
                    $sql = "UPDATE `contact` SET name='$name', address_contact='$address_contact', phone_number='$phone_number' WHERE id='$id'";
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