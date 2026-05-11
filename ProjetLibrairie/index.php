
<?php

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
        <link rel="stylesheet" href="../css/library_base.css">
    </head>
    <body>
   <nav>
     <ul>
        <li><a href="../Connexion/login">Login</a></li>
        <li><a href="Random.php"></a>Random</li>
        
     </ul>

   </nav>

   <main>
    <section class="gallery-links">

        <div class="wrapper">
        <h2> Latest records</h2>
        <div class="gallery-container">
             <?php

             include_once './Related_to_db/dbh.conn.php' ;

             $stmt = $pdo->prepare("SELECT Picture FROM jewel WHERE Picture = NOT NULL ORDER BY id DESC;") ;
                $stmt->execute($image);
                $stmt->fetchAll() ; 

                $stmt->bindColumn(1, $image, PDO::PARAM_LOB);
                $stmt->fetch(PDO::FETCH_BOUND);   
              
          echo'<a href="#">
                <div>
                 <h3>Title</h3>
                 <p> <?php $image> </p>
                </div>
            </a>';
            ?>

        </div>

        </div>
    </section>
   </main>
       
  
	

</div>

<footer>
  <nav>
     <ul>
        <li><a href=""></a>Random</li>
     </ul>
</nav>        
</footer>
    </body>
</html>







