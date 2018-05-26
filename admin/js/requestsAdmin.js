/*
*
* Solicitudes AJAX
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
                messageBox.innerHTML = dato;
            }
            //alert("");
        }
    });
}