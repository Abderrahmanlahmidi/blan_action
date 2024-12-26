<?php 

$servername = "localhost";
$username = "root";
$password = "123123321321@instance";

$conn = mysqli_connect($servername, $username, $password);

if ($conn) {
  echo "db its connection";
}else{
    echo "the db its not connection";
}

$sql = "SELECT * FROM situation.users";

$sqli_query = mysqli_query($conn, $sql);

$result = $conn -> query($sqli_query);

$row = $result -> fetch_assoc();

var_dump($row);



?>       