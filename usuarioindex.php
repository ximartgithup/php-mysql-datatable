<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado con DataTable</title>
    <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    
    <!--      /* para el datatable */     -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

 </head>
  <body>
   <script> 
   /** para activar el data table */
    $(document).ready( function () {
                $('#tbluser').DataTable();
        } );
    </script>
    <?php
     include('conexion.php');
     $sql="SELECT * FROM usuarios order by apellidos, nombres";
     $result= $mysqli->query($sql);

    ?>
    <div class="container">
    <h3>Listado de usuarios</h3>
    <table class="table table-hover  table-striped" id="tbluser">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRES</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>ACCIONES</th>
        </tr>
        </thead>    
        <tbody>
            <?php
               while($row=mysqli_fetch_assoc($result))
               {
                ?>   
                 <tr>
                  <td> <?php echo $row['id']; ?> </td>
                  <td> <?php echo $row['apellidos'].' '.$row['nombres']; ?> </td>
                  <td> <?php echo $row['direccion']; ?> </td>
                  <td> <?php echo $row['telefono']; ?> </td>
                  <td>Editar|Eliminar</td>
                 </tr>
          <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>NOMBRES</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>ACCIONES</th>
        </tr>
        </tfoot>

    </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>