<?php include('../functions.php') ?>

<?php
if(isset($_REQUEST['STT_education']) and $_REQUEST['STT_education']!=""){
$STT_education=$_GET['STT_education'];
$sql = "DELETE FROM education WHERE STT_education='$STT_education'";
if ($db->query($sql) === TRUE) {
    header("Location: administrator.php");
} 
else {
    echo "Error updating record: " . $db->error;
}
 
$db->close();
}
?>