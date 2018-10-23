<?php    
    include '../lib/header.php';
    
    if( isset($_POST['logout']) ){
        setcookie('name', "", time()-60, "/A2");
        setcookie('passwd', "", time()-60, "/A2");
        setcookie('name2', "", time()-60, "/A2");
        setcookie('passwd2', "", time()-60, "/A2");
        header('Location: ../index.php');
    }
    
    if( isset($_POST['personal-area']) ){
        header('Location: personal-area.php');
    }
    
?>

    <section>
        <h2 class="home-title">Pagina home</h2>
        <article>
            <form class="home-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="submit" name="personal-area" id="personal-area" value="Area privada">
                <input type="submit" name="logout" id="logout" value="Cerrar sessión">
            </form>
            <br>
            <p class="info-text">Inserta una url de una página web para mostrar</p>
            <form class="home-form-search" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="text" name="url" id="url">
                <input type="submit" name="search" id="search" value="Buscar">
            </form>
            <br>
            <?php if( isset($_POST['url']) && !empty($_POST['url']) ){ ?>
                <div class="iframe-container">
                    <p>Intentando mostrar la página: <?= $_POST['url'] ?></p>
                    <br>
                    <iframe id="iframe" src="<?= $_POST['url'] ?>"></iframe>
                </div>
            <?php } ?>
        </article>
    </section>
    
<?php

    include '../lib/footer.php'; 