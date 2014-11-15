<?php
//$pdo = new PDO('sqlite:users.db');
print_r(PDO::getAvailableDrivers());
echo '<br>';

$dsn = 'mysql:host=localhost;dbname=injectiondb'; //Drive that we wont to use
$username = 'joomla';
$password = 'ASDqwe1JO';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $dbh = new PDO($dsn, $username, $password, $options);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e) {
   // echo $e->getMessage();
    die('<br>Sorry, database connection problem.');
}
echo "123<br>";

//$dbh->query('INSERT INTO users (username, userpass) VALUES (`Вася`,`ASDqwe123`)');

// SELECT
$query = $dbh->query('SELECT * FROM users');

// Print selected columns from rows
// PDO::FETCH_BOTH (default), FETCH_NUM, FETCH_ASSOC, FETCH_OBJ
while ($row = $query->fetch(PDO::FETCH_ASSOC)){
    echo '<pre>',print_r($row),'</pre>';
    echo $row['username'];
}
/*  // Another words
foreach ($query as $row){
    echo $row['username'];
}*/

// OOP
$query = $dbh->query('SELECT * FROM users');
while ($row = $query->fetch(PDO::FETCH_OBJ)){
    echo '<pre>',print_r($row),'</pre>';
    echo $row->username.' ', $row->userspass,'<br>';
}
echo "<hr>";
/////////////////////////////////////////////////////////////////////////// 4-th lesson

class Users
{
    public $idusers, $username, $userspass;

    public function __construct()
    {
        $this->mail = "$this->username".'@mail.test';
    }
}
$query = $dbh->query('SELECT * FROM users');
$query->setFetchMode(PDO::FETCH_CLASS, 'Users');

while ($row = $query->fetch()){
    echo '<pre>', print_r($row), '</pre>';
}
/////////////////////////////////////////
$postName = 'Piter';
$postPass = 'PIpi123';

//INSERT in table exclude ability to injection
$sql = "INSERT INTO users (username, userspass) VALUES (?,?)";
$query = $dbh->prepare($sql);
$query->execute(array($postName,$postPass));
// --------------------

$query = $dbh->query('SELECT * FROM users');
echo '<pre>', print_r($query->fetchAll(PDO::FETCH_OBJ)), '</pre>';

//DELETE
echo $id = $dbh->lastInsertId();
$sql = "DELETE FROM users WHERE idusers = ?";
$query = $dbh->prepare($sql);
$query->execute(array($id));

/*
$pdo = new PDO('sqlite:users.db');
$stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT); //<-- Автоматически очищено с помощью PDO
$stmt->execute();

*/
