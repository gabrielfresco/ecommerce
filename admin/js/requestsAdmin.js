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


/**
 * 
 * Cities
 * 
 */

function insertCity()
{
    console.log("inserte city");
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "city",
            action: "add",
            codigoCountry: document.getElementById('codigoCountry').value,
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
                actualizarTabla("table-cities");
                messageBox.innerHTML = dato;
                
                
            }
            //alert("");
        }
    });
}

function eliminarCity(codigoCity)
{
    console.log("elimine city");
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "city",
            action: "remove",
            codigoCity: codigoCity
    }),          
        cache: false,
        dataType: "text",
        success:  function (dato)
        { 
            
            messageBox = document.getElementById('messageListar')
            if(messageBox)
            {
                actualizarTabla("table-cities");
                messageBox.innerHTML = dato;
                
            }
            //alert("");
        }
    });
}



/**
 * 
 * Locations
 * 
 */

function insertLocation()
{
    console.log("inserte localidad");
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "location",
            action: "add",
            codigoCity: document.getElementById('codigoCity').value,
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
                actualizarTabla("table-locations");
                messageBox.innerHTML = dato;
                
                
            }
            //alert("");
        }
    });
}

function eliminarLocation(codigoLocation)
{
    console.log("elimine localidad");
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "location",
            action: "remove",
            codigoLocation: codigoLocation
    }),          
        cache: false,
        dataType: "text",
        success:  function (dato)
        { 
            
            messageBox = document.getElementById('messageListar')
            if(messageBox)
            {
                actualizarTabla("table-locations");
                messageBox.innerHTML = dato;
                
            }
            //alert("");
        }
    });
}

/**
 * 
 * Stores
 * 
 */


function insertStore()
{
    console.log("inserte sucursal");
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "store",
            action: "add",
            codigoLocation: document.getElementById('codigoLocation').value,
            nombre: document.getElementById('nombre').value,
            address: document.getElementById('address').value,
            postalCode: document.getElementById('postalCode').value,
            telephone: document.getElementById('telephone').value,
            available: document.getElementById('available').value,
            email: document.getElementById('email').value,
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
                actualizarTabla("table-stores");
                messageBox.innerHTML = dato;
                
                
            }
            //alert("");
        }
    });
}

function eliminarStore(codigoStore)
{
    console.log("elimine sucursal");
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "store",
            action: "remove",
            codigoStore: codigoStore
    }),          
        cache: false,
        dataType: "text",
        success:  function (dato)
        { 
            
            messageBox = document.getElementById('messageListar')
            if(messageBox)
            {
                actualizarTabla("table-stores");
                messageBox.innerHTML = dato;
                
            }
            //alert("");
        }
    });
}



/**
 * 
 * Products
 * 
 */


function insertProduct()
{
    console.log("inserte producto");
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "product",
            action: "add",
            idCategory: document.getElementById('idCategory').value,
            name: document.getElementById('name').value,
            width: document.getElementById('width').value,
            depth: document.getElementById('depth').value,
            length: document.getElementById('length').value,
            price: document.getElementById('price').value,
            warranty: document.getElementById('warranty').value,
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

function modificarProduct()
{
    console.log("Modifique producto");
    $.ajax
    ({
        type: "POST",
        url: "modifyProduct.php",
        data:({
            request: "product",
            action: "modify",
            idProduct: document.getElementById('idProduct').value,
            idCategory: document.getElementById('idCategory').value,
            name: document.getElementById('name').value,
            width: document.getElementById('width').value,
            depth: document.getElementById('depth').value,
            length: document.getElementById('length').value,
            price: document.getElementById('price').value,
            warranty: document.getElementById('warranty').value,
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

function eliminarProduct(idProduct)
{
    console.log("elimine producto");
    $.ajax
    ({
        type: "POST",
        url: "requestsAdmin.php",
        data:({
            request: "product",
            action: "remove",
            idProduct: idProduct
    }),          
        cache: false,
        dataType: "text",
        success:  function (dato)
        { 
            
            messageBox = document.getElementById('messageListar')
            if(messageBox)
            {
                actualizarTabla("table-products");
                messageBox.innerHTML = dato;
            }
            //alert("");
        }
    });
}



////////////////////////////////////////////////////////////////////////////////////////////////////////
    /* al terminar de cargar la pagina hace esto */

$(document).ready(function(){
    console.log("Ready");

    /* ################# */
    /* Todo de countries */
    /* ################# */
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
        /*
        console.log(field_name);
        console.log(edit_id);
        console.log(value);
        */
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

    /* ################# */
    /* Todo de cities */
    /* ################# */

    // Agregar clase
    $('.edit-city').click(function(){
        $(this).addClass('editMode');
    });

    // Guardar la info
    $(".edit-city").focusout(function(){
        $(this).removeClass("editMode");
        var id = this.id;
        var split_id = id.split("_");
        var field_name = split_id[0];
        var edit_id = split_id[1];
        var value = $(this).text();

        $.ajax({
        url: "requestsAdmin.php",
        type: 'post',

        data:({
        field:field_name,
        value:value,
        codigoCity:edit_id,
        request: "city",
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


    /* ################# */
    /* Todo de locations */
    /* ################# */

    // Agregar clase
    $('.edit-location').click(function(){
        $(this).addClass('editMode');
    });

    // Guardar la info
    $(".edit-location").focusout(function(){
        $(this).removeClass("editMode");
        var id = this.id;
        var split_id = id.split("_");
        var field_name = split_id[0];
        var edit_id = split_id[1];
        var value = $(this).text();

        $.ajax({
        url: "requestsAdmin.php",
        type: 'post',

        data:({
        field:field_name,
        value:value,
        codigoLocation:edit_id,
        request: "location",
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
