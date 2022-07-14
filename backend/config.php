<?php 

$servertype = "mysql";
$servername = "localhost";
$serverport = 3306;
$username = "root";
$password = "";
$dbname = "desurance";
$tablename = "users";
$apiTable = "apiInfo";

try {
        if ($servertype == "mysql") {
                $dsn = "mysql:host=$servername;port=$serverport;dbname=$dbname;";
        } else {
                die ('DB config error');
        }
        $conn = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (PDOException $e) {
        die($e->getMessage());
}

