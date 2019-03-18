<?php
$servername = "127.0.0.1";
$username = "test";
$password = "password";



$conn = new PDO("mysql:host=$servername;dbname=test_db", $username, $password);
var_dump($_POST["name"]);

if (isset($_POST['name'])) {
    $statement = $conn->prepare('INSERT INTO users (name) VALUES (:name)');
    $statement->bindParam(':name', $_POST['name']);
    $statement->execute();
    var_dump($statement);
}

$users = $conn->query('SELECT * FROM users');

foreach($users as $user) {
    echo $user['name'] . '<br>';
}

?>

<form action="index.php" method="POST">
    <input type="text" name='name'>
    <button type> add </button>

</form>