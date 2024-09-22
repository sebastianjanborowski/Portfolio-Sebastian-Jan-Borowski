<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "handmadetree";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$email = $data->email;
if($name != null && $email != null)
{
    $sql = "INSERT INTO Users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        //header('Location:http://localhost/SerwisBeckendowyHandmadetree.pl/i.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
else
{
    echo "brak danych";
}

$conn->close();
?>