
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="motor servicing";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //   echo "connection ok";
}
else{
    echo "connection failed".mysquli_connect_error();
}
?>