<?php
 session_start() ; 
 //session starts through here

 //this is used to shoot you back in the "same" website but in user mode, which isn't necessary to 
 //interact with data, but is to add to it.
?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<html>

<canvas></canvas>

<div class="form-wrapper">
  <form action="include/formhandler.inc.php" onsubmit="return false;" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="username" placeholder="Username">
    
    <label for="email">Email</label>
    <input type="password" id="password" name="pwd" placeholder="Password" >
    
    <label for="password">Password</label>
    <input type="text" id="email" name="email" placeholder="E-Mail">
    
    <button>Log Up</button>
  </form>
</div>
</body>



</html>

<?php 
if(isset($POST["Log up"])) {

    if(!empty($_POST["username"]) &&  
       !empty($_POST["password"])) {

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["pwd"] = $_POST["pwd"];

    header("Location: trueindex.php");
//trueindex.php is basically a copy of index, but with the capacity 

    }
    else {
        echo"Incorrect process during Log up.";
    }
}

if(password_verify("password", $password)) {
    echo "You are logged in" ; 
}
else { 
    echo "Incorrect, access refused";
}


?>

<!-- <form action="includes/formhandler.inc.php" method="post">
<input type="text" name="username" placeholder="Username"> <br>
<input type="password" name="pwd" placeholder="Password"> <br>
<input type="text" name="email" placeholder="E-Mail"> <br>
<button>Log Up</button>
    </form> -->