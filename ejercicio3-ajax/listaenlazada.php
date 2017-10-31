<?php

include './bd/conexion.php';


$idcat = $_POST['idcat'];

$tablasubcategorias = "SELECT *
                       FROM subcategorias
                       WHERE  id_categoria = $idcat
                        ORDER BY subcategoria ASC
                        ";

$querydos = $conexion->query($tablasubcategorias);

while($registrosubcategorias = $querydos->fetch(PDO::FETCH_OBJ))
{
 ?>

    <option value="<?php echo $registrosubcategorias->id_subcategoria; ?>"> <?php echo $registrosubcategorias->subcategoria; ?> </option>

<?php

}

?>
            <script type="text/javascript">

              document.forms.frmDatos.selPropiedades.disabled=false;

            </script>
