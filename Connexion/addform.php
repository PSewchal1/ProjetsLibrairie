<?php

session_start() ; 
?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../css/addform.css">
    <title> Add to Library </title>
    <h3> Add to Library </h3>
<body>
  <main>
    <form action ="Relatedtodb/addformhandlerimage.php" method="post" enctype ="multipart/form-data" > <!-- See to it, that the formhandler works on both, or create a custom to
      add form-->
    <label for="image">Image file</label> <!-- -->
      <input id="name" type="file" name="image" placeholder="Insert image file"  >

    <label for="name">Name of the piece</label> <!-- -->
      <input id="name" type="text" name="name" placeholder="Name of piece ?"  >

    <label for="'">Date</label>
      <input id="date" type="text" name="date" placeholder="Date of creation ?"  >
    <label for="Info">Information</label>
      <input id="text" type="text" name="Info" placeholder="Details..?"  >


<button type="submit" name="submit">Submit</button>

    </form>
  </main>
</body>
    </html>