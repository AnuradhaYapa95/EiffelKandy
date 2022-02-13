<?php

$id = $_POST['delete_id'];

$servername = "localhost";
$username = "id15299360_eihe";
$password = "XhHQ>=?9-/|>u=uf";
$dbname = "id15299360_eihekandy";
               
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "UPDATE `contactus` SET status='Answered' WHERE id={$id}";

$result = mysqli_query($conn,$query);
if($result){
echo "Status has been updated successfully!";
}
else{
echo "Can not update status!";
}

?>