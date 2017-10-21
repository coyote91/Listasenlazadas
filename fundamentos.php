<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <form action="#" method="post" id="demoForm" class="demoForm">

        <select multiple="multiple" size="8" id="scripts_multi" name="scripts_multi[]"  onchange="cambia_provincia()" >
            <option value="scroll">Scrolling Divs JavaScript</option>
            <option value="tooltip" selected>JavaScript Tooltips</option>
            <option value="con_scroll">Continuous Scroller</option>
            <option value="banner" selected>Rotating Banner JavaScript</option>
            <option value="random_img">Random Image PHP</option>
            <option value="form_builder">PHP Form Generator</option>
            <option value="table_class">PHP Table Class</option>
            <option value="order_forms">PHP Order Forms</option>
        </select>


</form>



<script type="text/javascript">

function cambia_provincia(){

  //var pais
  //pais = document.f1.pais[document.f1.pais.selectedIndex].value

  var sel = document.getElementById('scripts_multi');


  console.log( sel.options[sel.selectedIndex].text );



}


</script>


  </body>
</html>
