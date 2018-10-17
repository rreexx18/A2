<?php
     
    $JsonFileContent = file_get_contents("data/dades.json");
    $array = json_decode($JsonFileContent, true);
    
    $error = 0;
    
     if( isset($_POST["save"]) && !empty($_POST["name"]) && !empty($_POST["passwd"]) ){
        
        if( $array[0]['name'] == $_POST['name'] && $array[0]['passwd'] == $_POST['passwd'] ){
            setcookie('name', $_POST['name'], time()+600, "/");
            setcookie('passwd', $_POST['passwd'], time()+600, "/");
            setcookie('time', time(), time()+600);
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['passwd'] = $_POST['passwd'];
            
            if( isset($_COOKIE['name']) && isset($_COOKIE['passwd']) ){
                header('Location: pages/home.php');
            }
        }else{
            $error = 1;
        }
     }
     
    if( !empty($_POST["name"]) && !empty($_POST["passwd"]) ){
         
        if( $array[0]['name'] == $_POST['name'] && $array[0]['passwd'] == $_POST['passwd'] ){
            setcookie('name2', $_POST['name'], time()+600, "/");
            setcookie('passwd2', $_POST['passwd'], time()+600, "/");
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['passwd'] = $_POST['passwd'];
            header('Location: pages/home.php');
        }else{
            $error = 1;
        }
    }
    
    if( ( empty($_POST['name']) && !empty($_POST['passwd']) ) || ( !empty($_POST['name']) && empty($_POST['passwd']) ) ){
        $error = 1;
    }
    
    if( $error == 1 ){
        echo "<div class='error'>El usuario o contraseña no coinciden</div><br>";
    }
?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="login">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="passwd">Contraseña</label>
        <input type="password" name="passwd" id="passwd">
        <label><input type="checkbox" name="save" id="save"> Recuerdame el usuario</label>
    </div>
    <div><br><input type="submit" name="button" id="button" value="Envia"></div>
</form>