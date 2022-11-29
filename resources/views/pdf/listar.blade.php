<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
      <h2>Hover Rows</h2>
      <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
      <table class="table table-hover">
        <thead>
          <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>historia clinica</th>
            <th>edad</th>
          </tr>
        </thead>
        <tbody>
          @foreach($lista as $listar)
            <tr>
              <td>{{ $listar->nombre }}</td>
              <td>{{ $listar->apellido }}</td>
              <td>{{ $listar->historia_clinica }}</td>
              <td>{{ $listar->edad }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


