<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD AJAX+PHP+MYSQL</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/ajax.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">ulich3s.com</a>
      </div>
    </nav>
    <div class="container">
      <div class="starter-template">
        <h1>CRUD with ajax php & mysql</h1>
        <p class="lead">Create Read Update Delete</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon" aria-hidden="true"></span> Agregar un nuevo usuario
        </button>
      </div>
      <br>
      <div class="panel panel-default">
        <div class="panel-heading">Lista de Usuarios</div>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombres</th>
              <th>Contrasena</th>
            </tr>
          </thead>
          <tbody>
          
              <?php
                require("clases/conexion.php");
                $conn = conectar();
                $sql = "SELECT id, nombre, contrasena FROM users";
                $stmt = $conn->prepare($sql);
                $result = $stmt->execute();
                //hacemos referencias a nuestra columnas con FECH_OBJ
                $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

                foreach ($rows as $row) {
              ?>

              <tr>
                <td> <?php print($row->id);?> </td>
                <td> <?php print($row->nombre);?> </td>
                <td> <?php print($row->contrasena);?> </td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger">Seleccione</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a onclick="Eliminar('<?php print($row->id);?>')">Eliminar</a></li>
                      
                      <li><a onclick="Editar('<?php print($row->id);?>','<?php print($row->nombre);?>','<?php print($row->contrasena);?>')">Actualizar</a></li>
                    </ul>
                  </div>
                </td>
              </tr>

              <?php
                  # code...
                }

              ?>

             </tbody>
        </table>
      </div>

      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Usuario</h4>
            </div>
            <!--button type="button" onclick="B();" name="button">Ejemplo</button-->
            <form role="form" action="" name="frmClientes" onsubmit="Registrar(id, accion); return false">
              <div class="col-lg-12">
               
                <div class="form-group">
                  <label>Nombres</label>
                  <input name="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>contrasena</label>
                  <input name="contrasena" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-info btn-lg">
                  <span class="glyphicon" aria-hidden="true"></span> Registrar nuevo usuario
                </button>

              </div>
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fa fa-times"></i>Cerrar</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
    var accion, id;

      function Nuevo(){
        accion = 'N';
        document.frmClientes.nombre.value = "";
        document.frmClientes.contrasena.value = "";
        $('#modal').modal('show');
      }

      function Editar(id,nombre, contrasena){
        accion = 'E';
        id = id;
        document.frmClientes.nombre.value = nombre;
        document.frmClientes.contrasena.value = contrasena;
        $('#modal').modal('show');
      }

      function Elminar(id){
        id = id;
        document.frmClientes.id.value = id;
      }

    </script>
  </body>
  </html>