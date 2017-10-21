<?php

include './bd/conexion.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form id="frmDatos" name="frmDatos" method="post" action="">
      <label>Categorias:
          <select name="selCiudades" size="20" id="selCiudades" onchange="ComponerLista()" >
              <?php

                  $tablacategorias = "SELECT *
                                      FROM categorias
                                      ORDER BY categoria ASC
                                    ";

                                    $query = $conexion->query($tablacategorias);

                                    $conteo = $query->rowCount();

                  if( $conteo > 0)
                 {

                      while ($registrocategorias =  $query->fetch(PDO::FETCH_OBJ))
                      {

              ?>
                              <option value="<?php echo $registrocategorias->id_categoria; ?>"> <?php echo $registrocategorias->categoria; ?> </option>

              <?php

                    }

                }

              ?>
          </select>
      </label>


            <label>Subcategorias:
            <select name="" size="20" id="selPropiedades">
            </select>
            </label>

            <div id="load"></div>

   </form>


  <script src="./app.js" charset="utf-8"></script>



  </body>
</html>
