


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


} //END FUNCTION COMPONERLISTA


function objetoAjax(){
      	var xmlhttp=false;
      	try {
      		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
      	} catch (e) {

      	try {
      		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      	} catch (E) {
      		xmlhttp = false;
      	}
      }

      if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      	  xmlhttp = new XMLHttpRequest();
      	}
      	return xmlhttp;

} //END OBJETO AJAX



function CargarPropiedades(idcat)
{

  ajax=objetoAjax();

  ajax.open("POST", "./listaenlazada.php",true); //false
  ajax.onreadystatechange=function() {
        if (ajax.readyState==4 && ajax.status == 200)
        {
             document.getElementById("selPropiedades").innerHTML =  ajax.responseText;

             if(document.getElementById("selPropiedades").options.length == 0)
             {
               document.getElementById("select2").style.display = "none";
               document.getElementById("selPropiedades").style.display = "none";
             }
             else if(document.getElementById("selPropiedades").options.length > 0)
             {
                document.getElementById("select2").style.display = "block";
                document.getElementById("selPropiedades").style.display = "block";
             }

      }
      else if(ajax.readyState==1)
      {
        document.getElementById('load').innerHTML = "Cargando...";

      }
 }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  ajax.send("idcat="+idcat); //null



}
