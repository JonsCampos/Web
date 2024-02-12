<?php
require_once("../Service/Database.php");

$db = new Database();

$id = $_GET['id'];
$description = $_GET['description'];
$internal_code = $_GET['internal_code'];

//var_dump($_GET);
try {

  $sql = "update patrimonio set description='$description',      internal_code='$internal_code'
              where id = '$id'
              ";
//echo "$sql";
  
 $db->exec($sql);
  
 echo "<script>
  window.location.replace('list-patrimonio.php');
  </script>";
  
}catch(PDOException $e ) {
  var_dump($e->getMessage());
}


