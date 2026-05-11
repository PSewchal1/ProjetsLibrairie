<?php 
//a document to enable one to connect 
//THIS DOCUMENT IS A GENERAL CODE TOOL USED BY LOGIN.PHP TO GO TO TRUEINDEX.PHP 
//ALLOWING USER TO USE MORE FUNCTIONALITIES

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
 $username = $_POST["username"];
 $pwd = $_POST["pwd"];
 $email = $_POST["email"];

 try {
    require_once "dbh.conn.php"; //ask to connect to the database

    $query = "INSERT INTO user(username, pwd, email) VALUES (:username, :pwd, :email);";
   
    $stmt =$pdo->prepare($query); 

    $stmt->bindParam(":username", $username); 
    $stmt->bindParam(":pwd", $pwd); 
    $stmt->bindParam(":email", $email); //simplify binding between user entry and database management

    $stmt->execute() ; 
    $pdo = null ; 
    $stmt = null ; 

    header("Location: ../trueindex.php"); //sends you to correct page if ok
    die() ; 
 }
 catch (PDOException $e){
    die("Query failed: " . $e->getMessage()); 
 }

} 
    else {
        header("Location: ../login.php");
//sends you back to the same page if user fails to fulfill demands, a basic reset in short
    }
