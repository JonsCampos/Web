<html>
<head>
  <title>Lista de Patrimônios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-dark">
  <div class="container-fluid bg-secondary">
      <div class="container text-white">
          <div class="row py-3 mb-5">
              <div class="col d-flex justify-content-center align-items-center">
                <strong>Lista de Patrimônios</strong>
              </div>
          </div>
      </div>
  </div>
  <div class="container">


<?php
require_once("../Service/Database.php");

$db = new Database();

try {

  $sql = "select distinct * from patrimonio";
  $result = $db->query($sql);

  echo "<table class='table table-dark table-hover'>";
  echo "<thead>
  <tr>
  <th style='width:15%'>Código Interno</th>
  <th style='width:35%'>Descrição</th>
  <th style='width:25%'>Data de Criação</th>
  <th style='width:25%'></th></tr>
  </thead>
  <tbody>";
  foreach($result as $row) {
    echo "<tr>";
    echo "<td>".$row['internal_code']."</td>";
    echo "<td>".$row['description']."</td>";
    echo "<td>".$row['created_at']."</td>";


    echo "<td><a href=view-patrimonio-form.php?id=".$row['id']." class ='btn btn-primary btn-sm mb-1'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16' style='vertical-align: sub;'>
  <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
  <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
</svg> Visualizar</a>

<a href=update-patrimonio-form.php?id=".$row['id']." class ='btn btn-warning btn-sm mb-1'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16' style='vertical-align: sub;'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg> Editar</a>

<a href=delete-patrimonio.php?id=".$row['id']." class ='btn btn-danger btn-sm mb-1'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16' style='vertical-align: sub;'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
  <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
</svg> Excluir</a></td>";

    
    echo "</tr>";
  
  }
  echo "</tbody>";
  echo "</table>";
  echo "<br>";
  echo "<a href='../index.php' class='btn btn-light mb-2'>Voltar</a>";
  echo "<a href='add-patrimonio-form.php' class='btn btn-success mx-2 mb-2'>Adicionar Patrimônio</a>";
  
}catch (PDOException $e) {
   echo $ex->getMessage();
}

?>

  </div>
</body>
</html>