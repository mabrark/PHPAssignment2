<?php
   session_start();
?>

<!DOCTYPE html>
<html>
     <head>
       <title>Library stock - Database error</title>
       <link rel="stylesheet" type="txt/css" herf="css/main.css" />
     </head>
     <body>
        <?php include("header.php"); ?>

        <main>
          <h2>Database Error</h2>
             
          <p>There was an error connacting to the database.</p>
          <p>The database must be installed.</p>
          <p>MySQL must be running.</p>
          <p>Error message: <?php echo $_SESSION["database_error"], ?></p>

          <p><a href="index.php">View Book List</a></p>
        </main> 

        <?php include("footer.php"); ?>   
     </body>
</html>