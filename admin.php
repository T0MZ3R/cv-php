<?php include("inc/header.inc.php"); ?>
<?php if(isset($_SESSION['admin']) AND $_SESSION['admin'] == 1){ ?>


    <main class="container-2">
    <section class="section-admin">
        <h3>Page d'administration du cv</h3>
    </section>
    <?php include("inc/section/admin-hero.inc.php"); ?>
    <?php include("inc/section/admin-about.inc.php"); ?>
    <?php include("inc/section/admin-skills.inc.php"); ?>
    <section class="section-admin-resume"></section>
    </main>


<?php }else{?>
    <script>
        alert("Tu vas faire comme tout le monde et passer par le bouton pour venir. Arrete d'essayer de tricher sale chien.");
        document.location.href="index.php";
    </script>
<?php }?>

<?php include("inc/footer.inc.php"); ?>