<?php

$id = $_POST['delete_id'];

$servername = "localhost";
$username = "id15299360_eihe";
$password = "XhHQ>=?9-/|>u=uf";
$dbname = "id15299360_eihekandy";
               
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "DELETE FROM `contactus` WHERE id={$id}";

$result = mysqli_query($conn,$query);
if($result){
echo "Record has been deleted successfully!";
}
else{
echo "Could not delete the record!";
}

?>