<?php

include './bd/conexion.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

    <form id="frmDatos" name="frmDatos" method="post" action="">

      <div id="select1">
         <div class="labelselect1">
           <label for="selCiudades">Seleccione una categoria:</label>
         </div>

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

      </div>


        <div id="select2">

          <div class="labelselect2">
             <label for="selPropiedades">Por favor especifique </label>
          </div>


          <select name="selPropiedades" size="20" id="selPropiedades" class="selPropiedades">
          </select>


        </div>


            <div id="load"></div>

   </form>


  <script src="./app.js" charset="utf-8"></script>



  </body>
</html>
