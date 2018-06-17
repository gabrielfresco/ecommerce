<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir todas las clases llamadas debajo en los switchs
include_once(dirname(__FILE__) . "/.." . "/php/users.php");
include_once(dirname(__FILE__) . "/.." . "/php/constants.php");

session_start();

if(isset($_POST))
{
    if(isset($_POST["request"]) && isset($_POST["action"]))
    {
          
        
        $request = $_POST["request"];
        $action = $_POST["action"];
        switch ($request)
        {
            case "user":
                switch ($action)
                {
                    case "add":
                        userInsertar();
                        break;
                    case "modify";
                        userModificar();
                        break;
                    case "view":
                        userListar();
                        break;
                }
                break;
            case "cerrar_sesion":
                echo cerrarSesion();
                break;
            case "iniciar_sesion":
                echo json_encode(iniciarSesion());
                break;                    
        }
    }
}

/*  Users  */

function userInsertar()
{
    $response = array();

    if(isset($_POST["email"]))
    {
        $user = new User();
        $user->setFirstname($_POST["firstname"]);
        $user->setLastname($_POST["lastname"]);
        $user->setEmail($_POST["email"]);
        $user->setPassword($_POST["password"]);
        $user->setPrivilege($_POST["privilege"]);
        $user->setState(User::STATE_ACTIVE);
        if($user->insert() == true)
        {
            guardarSesion($user);
            $response['successful'] = true;
            $response['message'] = "Usuario creado exitosamente";
        }else{
            $response['successful'] = false;
            $response['message'] = "Ha ocurrido un error, revise la informacion";
        }

        echo json_encode($response);
    }
}

function guardarSesion($user) {
    $_SESSION["user_name"] = $user->getFirstname() . " " . $user->getLastname();
    $_SESSION["user_email"] = $user->getEmail();  
    setcookie("user", $user->getEmail(),time() + (int)Constants::COOKIES_EXPIRATION_TIME);
}

function cerrarSesion() {
    unset($_COOKIE["user"]);
    unset($_SESSION);
    return session_destroy();
}

function iniciarSesion() {
    $loggedIn = false;
    if(isset($_POST["email"])) {
        $user = new User();
        $user->findUserByEmail($_POST["email"]);

        if($user->getPassword() == $_POST["password"]) {
            guardarSesion($user);
            $loggedIn = true;
        }
    }

    return $loggedIn;
}
?>