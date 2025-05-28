<?php
    session_start();
    $dsn = 'mysql:host=localhost;dbname=library_stock';
    $username = 'root';
    $password = '';

    try {
      $db = new PDO($dsn, $username, $password);
    }
    catch (PDOException $e)
    {
      $_SESSION["database_error"] = $e->getMessage();
      $url = "database_error.php";
      header("location: " . $url);
      exit();
    }
?>