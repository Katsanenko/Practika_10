<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$insert_query = "INSERT INTO users (first_name, last_name, password, id_role) 
            VALUES ('Petro', 'Ryaboshapka','konyaka', 1);";
    $conn->query($insert_query);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["last_name"]. "<br>";
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. "<br>";
        echo "id: " . $row["id"]. " - Password: " . $row["password"]. "<br>";
    }
} 
$conn->close();
?>