<?php 
    
    require "conexion.php";
    session_start();
    
    if ($_POST){
        $usuario = $_POST['usuario'];
        $password= $_POST['password'];


        $sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario='$usuario'";
        $resultado = $mysqli->query($sql);
        $num = $resultado->num_rows;

        if($num > 0 ){
            $row = $resultado->fetch_assoc();
            $password_db = $row['password'];
            $pass_c = sha1($password);
            
            if($password_db == $pass_c){
                $_SESSION['id'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
                header ("Location:principal.php");
            
            }else{
                echo "no coincide las contraseñas";
        }


    } else{
        echo "no existe el usuariooo";
    }

    }

    
    


?>


<!DOCTYPE html>
<html>
<head>
    <title>Control de Acceso Servirefri</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
           font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
           background-image: url("./imagenes/fondo.jpg");
        }
        .container {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 50px;
            align-self: center;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.3);
            border: 1px solid #000000;
            border-radius: 4px;
            box-shadow: 0 4px 19px rgba(40, 205, 242, 0.368);
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #ffff;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 5px;
        }
        .form-group button {
            padding: 5px 10px;
            background-color: #11e554cd;
            color: #000000;
            border: none;
            border-radius: 4px;
            cursor: pointer;

        }
        h2{
            color: #ffff;
        }

    </style>
</head>
<body>

    <div class="container">
        <img src="./imagenes/login.png" width="200" height="200">
        <br>
        <h2>Control de Acceso</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="user">Usuario:</label>
                <input type="text" id="correo" name="usuario">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="password">
            </div>
            <div class="form-group">
                <button type="submit">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</body>
</html>