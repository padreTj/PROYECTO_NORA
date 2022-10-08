<?php
    $servername='localhost';
    $username='id18803800_proyectonora_362';
    $password='ClaveNora362_';
    $dbname = "id18803800_databasenora";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM usuarios WHERE nombre LIKE '%{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['nombre'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>