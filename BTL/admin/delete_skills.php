<?php include('../functions.php') ?>

<?php
if(isset($_REQUEST['STT']) and $_REQUEST['STT']!=""){
$STT=$_GET['STT'];
$sql = "DELETE FROM soft_skills WHERE STT='$STT'";
if ($db->query($sql) === TRUE) {
    header("Location: administrator.php");
} 
else {
    echo "Error updating record: " . $db->error;
}
 
$db->close();
}
?>