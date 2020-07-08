<?php
function connect_to_basetest01(){
$servername="localhost";
$username="root";
$databasename="basetest01";
$password="";

try {
    $pdo= new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute (PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    echo "Connected successfully";
    return $pdo;
} catch (PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}
}

connect_to_basetest01();
  
$pdo= connect_to_basetest01();
$query = $pdo->query("SELECT * FROM produit");
$produit = $query->fetch();
var_dump($produit);

$produits = $pdo->query("SELECT * FROM produit")->fetchAll();
//var_dump($produits);
echo "<ul>";
foreach($produits as $produit){
    echo "<li>".$produit["nom"]. "</li>";
}echo"</ul>";


?>
