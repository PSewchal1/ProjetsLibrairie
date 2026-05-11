<?php 
// MADE FOR THE ADD FORM RESERVED TO LOGGED IN USERS

if(isset($_POST["submit"])) { 

    $fileName = $_FILES["file"]["name"]; 
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"]; 
    $fileError = $_FILES["file"]["error"]; 
    $fileType = $_FILES["file"]["type"]; 

    // extension
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $pdo = new PDO() ; 

    $allowed = array('jpg', 'jpeg', 'png', 'pdf'); 

    // Check extension
    if (in_array($fileActualExt, $allowed)) {

        if ($fileError === 0) {

            if ($fileSize < 100000) {

                $newfileName = uniqid('', true) . "." . $fileActualExt; 
                $fileDestination = './uploads/' . $newfileName; 

                require_once "dbh.conn.php";

                if(empty($fileName)) { 
                    echo "Failed.";
                } else {

                    move_uploaded_file($fileTmpName, $fileDestination); 

                    $query = "INSERT INTO image(image, name) VALUES (:image, :name)";
                    $stmt = $pdo->prepare($query); 

                    $stmt->bindParam(":image", $fileDestination); 
                    $stmt->bindParam(":name", $fileName); 

                    $stmt->execute(); 

                    $pdo = null; 
                    $stmt = null; 

                    header("Location: ../true_index.php?success");
                    exit();
                }

            } else {
                echo "Your file is too large";
            }

        } else {
            echo "Upload error";
        }

    } else {
        echo "File type not allowed";
    }
}
?>

?>