<?php
require_once("../Service/Database.php");

$db = new Database();

$description = $_GET['description'];
$internal_code = $_GET['internal_code'];
$created_at = date('d-m-Y H:i:s');

//var_dump($_GET);
try {

  // SQL 
  $res = $db->exec(
    "CREATE TABLE IF NOT EXISTS patrimonio (
      id INTEGER PRIMARY KEY AUTOINCREMENT, 
      description TEXT, 
      internal_code TEXT,
      created_at time
    )"
  );

  $sql = "INSERT INTO patrimonio (description, internal_code, created_at) 
          VALUES ('$description', '$internal_code', '$created_at')";

 $db->exec($sql);
  
  echo "<script>
  window.location.replace('list-patrimonio.php');
  </script>";
  
}catch(PDOException $e ) {
  var_dump($e->getMessage());
}


