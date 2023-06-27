
<?php
// dbname: データベース名、host: データベースを起動しているコンテナ名
$dsn = "mysql:dbname=test_db;host=run-php-db;";
$user  = "test_user";
$password = "test123";

try{
    $pdo = new PDO($dsn, $user, $password);
    $sql = "SELECT * FROM users WHERE id = 1";
    $sth = $pdo->query($sql);
    $user = $sth->fetch((PDO::FETCH_ASSOC));
    var_dump($user);
}catch(PDOException $error) {
    print("ERROR: ". $error->getMessage());
    exit;
}
