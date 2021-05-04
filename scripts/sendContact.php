<?php 
require('database.php');

$firstName= $_POST['firstName'];
$lastName = $_POST['lastName'];
$contactInfo = $_POST['contactInfo'];



 $dbh = new DBConnection();
 $conn = $dbh->getConnection(); //Connection Obtained

if(isset($memberId)){
   $sql = 'UPDATE `clients` SET firstName = :firstName, lastName =:lastName, contactInfo =:contactInfo WHERE id = :memberID ';
}else{ 
   echo'RECEIVED';
   $sql = 'INSERT INTO `clients` (firstName, lastName, contactInfo) VALUES (:firstName, :lastName, :contactInfo,)';

}

 $stmnt = $conn->prepare($sql);
 $stmnt->execute(array(
   ':firstName' => $firstName,
    ':lastName' => $lastName,
    ':contactInfo' => $contactInfo,


 ));
 $stmnt->closeCursor();
 $dbh = null;

header('Location: datasheet.php'); 
?>

