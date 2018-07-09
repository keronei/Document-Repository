<?php

require_once"connection.php";

$param = $_POST['identity'];



//echo "PARAM equals".$param;

$query = "select * from uploads_ where department_id = '$param'";

//$resl=$conn->query($query);

$data = array();

if ($result=mysqli_query($conn,$query))
  {
    
while ( $row = mysqli_fetch_array($result))
{
  $data[] = $row;
  //printf ("%s (%s)\n",$row[0],$row[1]);
}

  }
echo json_encode( $data );

?>