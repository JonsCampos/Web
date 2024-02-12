<html>
  <head>
    <title>Editar Patrimônio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-white">
  <div class="container-fluid bg-secondary">
      <div class="container text-white">
            <div class="row py-3 mb-5">
                <div class="col d-flex justify-content-center align-items-center">
                  <strong>Editar Patrimônio</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <form action="update-patrimonio.php" method="get">
      <?php
      
      $id = $_GET['id'];
      echo "<input type='hidden' name='id' value='$id'>";

      require_once("../Service/Database.php");

      $db = new Database();
      $sql = "select distinct * from patrimonio where id = '$id'";
      $result = $db->query($sql);
      $data = $result->fetch();

     echo '<div class="row">
     <div class="col-12 col-md-3 mb-1">
     <label for="internal_code"><strong>Código Interno</strong></label>
     <input type="internal_code" class="form-control mt-1" name="internal_code" id="internal_code"
      value="'.$data['internal_code'].'"
     required>
     </div>
     <div class="col-12 col-md-9">
     <label for="description"><strong>Descrição</strong></label>
      <input type="description" class="form-control mt-1" name="description" id="description" 
      value="'.$data['description'].'" required>
      </div>
      </div>
      <br>
      <a href="list-patrimonio.php" class="btn btn-light">Voltar</a>
      <input type="submit" class="btn btn-success mx-2" value="Confirmar">
    </form>';

       ?>
    </div>
  </body>
  
</html>