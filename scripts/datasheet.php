<?php 
require('scripts/database.php');

$dbh = new DBConnection();
$conn =$dbh->getConnection();

$sql = 'SELECT firstName, lastName, contactInfo, FROM `clients`';

$stmnt = $conn->prepare($sql);
$stmnt->execute();
$results = $stmnt->fetchAll();

foreach($results as $result){
    echo '<h3 style=\'margin: 0;\'>Clients</h3> First Name: ' . $result['firstName'] . '<br /> Last Name: ' . $result['lastName'] . '<br /> Contact Info: ' . $result['contactInfo'] .  "<br />";
}
$stmnt->closeCursor();
$dbh = null;

echo "hello world"; ?>
