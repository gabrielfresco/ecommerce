function actualizarTabla(div)
{
    $('#' + div).load(document.URL +  ' #'+div);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
*
* Solicitudes AJAX
*
*/


/**
 * 
 * Countries
 * 
 */

function insertCountry()
{
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "country",
            action: "add",
            codigo: document.getElementById('codigo').value,
            nombre: document.getElementById('nombre').value,
        //codigo: codigo,
        //nombre: nombre,
    }),          
        cache: false,
        dataType: "text",
        success:  function (dato)
        { 
            messageBox = document.getElementById('message')
            if(messageBox)
            {
                actualizarTabla("table-countries");
                messageBox.innerHTML = dato;
                
                
            }
            //alert("");
        }
    });
}

function eliminarCountry(codigo)
{
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "country",
            action: "remove",
            codigo: codigo
        //codigo: codigo,
        //nombre: nombre,
    }),          
        cache: false,
        dataType: "text",
        success:  function (dato)
        { 
            
            messageBox = document.getElementById('messageListar')
            if(messageBox)
            {
                actualizarTabla("table-countries");
                messageBox.innerHTML = dato;
                
            }
            //alert("");
        }
    });
}




////////////////////////////////////////////////////////////////////////////////////////////////////////
    /* al terminar de cargar la pagina hace esto */

    $(document).ready(function(){
         console.log("llego");

        /* Todo de countries */

        // Agregar clase
        $('.edit-country').click(function(){
          $(this).addClass('editMode');
        });
    
        // Guardar la info
        $(".edit-country").focusout(function(){
        console.log
          $(this).removeClass("editMode");
          var id = this.id;
          var split_id = id.split("_");
          var field_name = split_id[0];
          var edit_id = split_id[1];
          var value = $(this).text();
          
          console.log(field_name);
          console.log(edit_id);
          console.log(value);
          
          $.ajax({
          url: "requestsAdmin.php",
          type: 'post',
    
          data:({
            field:field_name,
            value:value,
            codigo:edit_id,
            request: "country",
            action: "modify",
          }),
          success:  function (dato)
          {
            messageBox = document.getElementById('messageListar');
            if(messageBox)
            {
                messageBox.innerHTML = dato;
            }
          }
          });
        });
    
        });
