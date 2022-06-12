<?php
include('config/configuration.php');

$contractorId= $_GET['contractorId'];

$sql = "DELETE from contractor where contractorId=$contractorId";

$res = mysqli_query($conn, $sql);

if($res==true){
    $_SESSION['del'] = '<div class="submit-btn3">delete successfully</div>';

    header("location:".URL.'contractors.php');
}else{
    $_SESSION['del'] = '<div class="submit-btn3">delete failed</div>';

    header("location:".URL.'delete.php');
}

?>