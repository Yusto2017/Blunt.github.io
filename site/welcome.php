<?php


// Server name must be localhost
$servername = "localhost";

// In my case, user name will be root
$username = "root";

// Password is empty
$password = "";

// Creating a connection
$conn = new mysqli($servername,
            $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failure: "
        . $conn->connect_error);
}
echo "welcome";
/* Creating a database named geekdata
//$sql = "CREATE DATABASE signup";
//if ($conn->query($sql) === TRUE) {
  //  echo "Database with name signup";
} else {
    echo "Error: " . $conn->error;
}
*/
// Closing connection
$conn->close();
?>
