<?php include('../functions.php') ?>

<?php
if(isset($_REQUEST['STT_experience']) and $_REQUEST['STT_experience']!=""){
$STT_experience=$_GET['STT_experience'];
$sql = "DELETE FROM experience WHERE STT_experience='$STT_experience'";
if ($db->query($sql) === TRUE) {
    header("Location: administrator.php");
} 
else {
    echo "Error updating record: " . $db->error;
}
 
$db->close();
}
?>