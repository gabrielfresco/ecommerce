function insertUser() {
    $.ajax
        ({
            type: "POST",
            url: "php/requests.php",
            data: ({
                request: "user",
                action: "add",
                privilege: 2,
                firstname: document.getElementById('firstname').value,
                lastname: document.getElementById('lastname').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
            }),
            cache: false,
            dataType: "json",
            success: function (data) {
                if(data.successful) {
                    window.location.href = "index.php"
                } else {
                    //TODO ver que hacer con el error
                }
            }
        });
}

function cerrarSesion() {
    $.ajax
        ({
            type: "POST",
            url: "php/requests.php",
            data: ({
                request: "cerrar_sesion",
                action: ""
            }),
            cache: false,
            dataType: "text",
            success: function (data) {
                window.location.href = "index.php"
            },
            error: function (err) {
                console.log(err);
            }
        });
}

function iniciarSesion() {
    $.ajax
        ({
            type: "POST",
            url: "php/requests.php",
            data: ({
                request: "iniciar_sesion",
                action: "",
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
            }),
            cache: false,
            dataType: "json",
            success: function (data) {
                if(data) {
                    window.location.href = "customer-account.php";
                } else {
                    //TODO mostrar error de crendeciales
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
}