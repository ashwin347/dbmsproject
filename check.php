dsfasdfsadfsdf
<?php
$servername = "localhost";
$username = "root";
$password = "ashwin";
$dbname = "practice";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $usr = $_POST["Username"];
    $pass = $_POST["password"];
    $sql = "INSERT INTO users (username,password) VALUES("ash","win")";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
