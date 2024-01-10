<?php
$host = '127.0.0.1'; //или localhost или то, что указано в панели управдения хостинга
$database = 'testing';
$port = ''; //проверьте порт MySql в xampp  или в панели управления хостинга
$user = 'root';
$password = '';

/*try {
$pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password);
//echo "Connected successfully";

  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die("Connection failed: " . mysqli_connect_error());
  }*/
      $conn = mysqli_connect($host, $user, $password, $database);
// Check connection
if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
}
else{
//echo "Connected successfully";
}

?>