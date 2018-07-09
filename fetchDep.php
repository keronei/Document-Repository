<?php

require_once"connection.php";

 ?>
 <?php
$sql = "select * from departments";

 //$result = mysql_query($conn,"select * from departments");   
 
$res = mysqli_query($conn,$sql);
 
$result = array();

$sth = mysqli_query($sql);
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
echo json_encode($rows);
//


 
//echo json_encode(array("products"=>$result));
 //echo json_encode(array($result));

//echo $result;


mysqli_close($conn);
 
?>
