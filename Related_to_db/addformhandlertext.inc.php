<?php
//REST OF FORM USING POST BC NOT A IMAGE
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
 $name = $_POST["name"];
 $date = $_POST["date"];
 $text = $_POST["text"];
 $type = $_POST["Info"];
 $image = $_FILES["image"];

 $pdo = new PDO() ; 

 try {
    require_once "dbh.conn.php"; //ask to connect to the database

    $query = "INSERT INTO jewel(name, date, text, type) VALUES (:name, :date, :text, :type, :image);";
   
    $stmt = $pdo->prepare($query); 

    $stmt->bindParam(":name", $name); 
    $stmt->bindParam(":date", $date); 
    $stmt->bindParam(":text", $text); //simplify binding between user entry and database management
    $stmt->bindParam(":type", $type);

    $stmt->execute() ; 
    $pdo = null ; 
    $stmt = null ; 

    header("Location: ../true_index.php"); //sends you to correct page if ok
    die() ; 
 }
 catch (PDOException $e){
    die("Query failed: " . $e->getMessage()); 
 }

} 
    else {
        header("Location: ../trueindex.php");
//sends you back to the same page if user fails to fulfill demands, a basic reset in short
    }

 
?>