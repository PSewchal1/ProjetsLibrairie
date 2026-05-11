
<?php
//THIS PAGE IS THE SAME AS INDEX, BUT MORE OPTIONS
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Library</title>
        <meta name="description" content="Homepage">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/trueindex.css">

    </head>
    <body>

    <div id="wrapper" data-mouse-down-at="0" data-prev-percentage="0">

	<img class="image" src="" alt="Richly colored building with a beautiful sky" draggable="false" />

	<img class="image" src="" alt="Golden Gate bridge at golden hour" draggable="false" />

	<img class="image" src="" alt="orange petaled flowers" draggable="false" />

	<img class="image" src="" alt="gray turntable playing" draggable="false" />

	<img class="image" src="" alt="group of penguin" draggable="false" />

	<img class="image" src="" alt="high-angle photography of stairs" draggable="false" />

	<img class="image" src="" alt="close-up photography of dog" draggable="false" />

	<img class="image" src="" alt="assorted color lockers" draggable="false" />

	<img class="image" src="" alt="brown coated monkey on branch" draggable="false" />

	<img class="image" src="" alt="a mountain range with a lake in the foreground" draggable="false" />

	<img class="image" src="" alt="low angle photography of gray concrete building at day time" draggable="false" />

</div>

    <form action="trueindex.php" method="post"></form>
    <input type="submit" name="logout" value="logout" ></input>

    </body>
</html>

<?php
if(isset($_POST["logout"])){
    session_destroy();
    header("index.php");
}
?>


