<html>
  <head>
    <title>Cadastrar Patrimônio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-white">
    <div class="container-fluid bg-secondary">
        <div class="container text-white">
            <div class="row py-3 mb-5">
                <div class="col d-flex justify-content-center align-items-center">
                  <strong>Cadastrar Patrimônio</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <form action="add-patrimonio.php" method="get">
      <div class="row">
        <div class="col-12 col-md-3 mb-1">
        <label for="internal_code"><strong>Código Interno</strong></label>
        <input type="internal_code" class="form-control mt-1" name="internal_code" id="internal_code" required>
        </div>
      <div class="col-12 col-md-9">
      <label for="description"><strong>Descrição</strong></label>
      <input type="description" class="form-control mt-1" name="description" id="description" required>
    </div>
    </div>
      <br>
      <a href="list-patrimonio.php" class="btn btn-light">Voltar</a>
      <input type="submit" class="btn btn-success mx-2" value="Adicionar">
    </form>
    </div>
  </body>
</html>