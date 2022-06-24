<?php
require_once 'dbconnection.php';

$link = mysqli_connect($host, $user, $password, $database) 
or die("Ошибка " . mysqli_error($link)); 
$query ="SELECT * FROM engines";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result);
    $dbresult = [];
   while($row = mysqli_fetch_assoc($result)){
    	$dbresult[] = $row;
    } 
    echo json_encode($dbresult);
    mysqli_free_result($result);
    
}

mysqli_close($link);
?>
