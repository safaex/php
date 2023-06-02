<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connectie gemaakt!";
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


?>

<h1>deel1</h1>

<?php
//Hoe je alles selecteert in een query zonder variabele
$stmt = $pdo->query("SELECT * FROM producten");
while ($row = $stmt->fetch()) {
    echo $row['product_code']."<br />\n";
    echo $row['product_naam']."<br />\n";
    echo $row['prijs_per_stuk']."<br />\n";
    echo $row['omschrijving']."<br />\n";
}
?>

<h2>deel2</h2>
<?php
// Hoe je een single row selecteert met placeholders
$product_code = 2;
$stmt = $pdo->prepare("SELECT * FROM producten WHERE product_code=?");
$stmt->execute([$product_code]); 
$data = $stmt->fetch();
echo $product_code . "<br>";

?>

<h3>deel3</h3>
<?php
//Hoe je een single row selecteert met named parameters
// select a particular user by id
$product_code = 2;
$stmt = $pdo->prepare("SELECT * FROM producten WHERE product_code=:product_code");
$stmt->execute(['product_code' => $product_code]); 
$data = $stmt->fetch();
echo $product_code . "<br>";

?>

</body>
</html>