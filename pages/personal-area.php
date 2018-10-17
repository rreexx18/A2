<?php

    include '../lib/header.php';
    
    if( isset($_POST["back"]) ){
        header('Location: home.php');
    }

?>
    <section>
        <h2 class="home-title">Area Privada</h2>
        <article>
            <p>Tu nombre es <?php if(empty($_COOKIE['name']) || !isset($_COOKIE['name'])){echo $_COOKIE['name2'];}else{echo $_COOKIE['name'];} ?></p>
            <p>Tu contraseña es <?php if(empty($_COOKIE['passwd']) || !isset($_COOKIE['passwd'])){echo $_COOKIE['passwd2'];}else{echo $_COOKIE['passwd'];} ?></p>
        </article>
        <form class="go-home-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="submit" name="back" value="Volver">
        </form>
    </section>
<?php

    include '../lib/footer.php';

