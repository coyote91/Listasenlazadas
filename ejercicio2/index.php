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
         <select name="selPropiedades" size="20" id="selPropiedades">
         </select>
         </label>
   </form>


       <script type="text/javascript">

       function ComponerLista()
       {
            var sel = document.getElementById("selCiudades");
            var idcat = sel.options[sel.selectedIndex].value

              //console.log( sel.options[sel.selectedIndex].text );

            //idcat = document.frmDatos.selCiudades[document.frmDatos.selCiudades.selectedIndex].value
         //  Primero desactiva la lista de ciudades, de forma que nadie pueda dar click mientras se carga.

         document.forms.frmDatos.selCiudades.disabled = true;

         // luego deja vacía la lista de propiedades (por si había algo seleccionado).

         document.forms.frmDatos.selPropiedades.length = 0;

         // luego Carga las Propiedades que están en esa ciudad, por medio de otra función que veremos mas adelante,

         // a la cual le envía como parámetro el id de la ciudad.

         CargarPropiedades(idcat);


         // Luego de cargadas las propiedades vuelve a permitir que demos click en a lista de ciudades (por si queremos cambiar) activándola de nuevo,

         document.forms.frmDatos.selCiudades.disabled = false;

       }


       function CargarPropiedades(idcat)
       {
          var o;

             console.log(idcat);

          document.forms.frmDatos.selPropiedades.disabled=true;

        <?php

        $tablasubcategorias = "SELECT *
        FROM subcategorias
        ORDER BY id_categoria ASC
        ";

        $querydos = $conexion->query($tablasubcategorias);



        while($registrosubcategorias = $querydos->fetch(PDO::FETCH_OBJ))
        {
          ?>
          var idcategoria = "<?php echo $registrosubcategorias->id_categoria; ?>";


              if( idcat == idcategoria)
              {


                   var x = document.getElementById("selPropiedades");
                    o = document.createElement("option");
                    o.text = '<?php echo $registrosubcategorias->subcategoria; ?>';
                    o.value = <?php echo $registrosubcategorias->id_subcategoria; ?>

                     x.add(o);

                    //document.forms.frmDatos.selPropiedades.options.add(o);
              }

      <?php

        }

        ?>
                       document.forms.frmDatos.selPropiedades.disabled=false;

     }//END


     </script>




  </body>
</html>
