<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Cementos Cruz Azul</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

  </head>
<body>
  <br>
  <div class="container">
    <form action="insertar.php" method="post">
    <div class="form-group">
      <label>Nombre</label>
        <!-- Validacion del campo nombre solo texto -->
        <script>
            const validar = function(campo) {
            let valor = campo.value;
            if(/\d/.test(valor)) {
            campo.value = valor.replace(/\d/g,'');
          }
        };
        </script>
        <!-- ................ -->
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required minlength="4" maxlength="30" oninput="validar(this)">
    </div>

    <div class="form-group">
      <label for="form-group">Unidades de medida</label>
      <select class="form-control" id="uMedida" name="uMedida" value="" required>
        <option></option>
        <option>g</option>
        <option>kg</option>
        <option>t</option>
      </select>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">$</span>
      </div>
      <input type="text" class="form-control" id="precio" name="precio" value="" required minlength="1" maxlength="6">
    </div>

      <div class="form-group">
        <label>Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" value="" required max="1000">
      </div>
      <input type="submit" class="btn btn-success"/>
    </form>
  </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>