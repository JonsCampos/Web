<html>
  <head>
    <title>Visualizar Patrimônio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-white">
  <div class="container-fluid bg-secondary">
      <div class="container text-white">
            <div class="row py-3 mb-5">
                <div class="col d-flex justify-content-center align-items-center">
                  <strong>Visualizar Patrimônio</strong>
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

    echo "<div class='row'>
    <div class='col-6 col-md-1 mb-3'>
      <div class='row'>
	      <div class='col-12 mb-2'>
		      <strong>ID</strong>
	      </div>
	      <div class='col-12'>
		      ".$data['id']."
	      </div>
      </div>
    </div>
    <div class='col-6 col-md-2 mb-3'>
      <div class='row'>
	      <div class='col-12 mb-2'>
		      <strong>Código Interno</strong>
	      </div>
	      <div class='col-12'>
		      ".$data['internal_code']."
	      </div>
      </div>
    </div>
    <div class='col-6 col-md-6 mb-3'>
      <div class='row'>
	      <div class='col-12 mb-2'>
		      <strong>Descrição</strong>
	      </div>
	      <div class='col-12'>
		      ".$data['description']."
	      </div>
      </div>
    </div>
    <div class='col-6 col-md-3 mb-3'>
      <div class='row'>
	      <div class='col-12 mb-2'>
		      <strong>Data de Criação</strong>
	      </div>
	      <div class='col-12'>
		      ".$data['created_at']."
	      </div>
      </div>
    </div>
  </div>";

  echo "<br><br>";
  echo "<a href='list-patrimonio.php' class='btn btn-light'>Voltar</a>";

       ?>
    </div>
  </body>

</html>