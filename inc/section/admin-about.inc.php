<?php 
    if(isset($_POST['modif-user']) AND $_POST['modif-user'] == 1){
        $nom = $_POST['modif-nom'];
        $prenom = $_POST['modif-prenom'];
        $dateNaissance = $_POST['modif-date-naissance'];
        $website = $_POST['modif-website'];
        $num = $_POST['modif-num'];
        $ville = $_POST['modif-ville'];
        $diplome = $_POST['modif-diplome'];
        $mail = $_POST['modif-email'];
        $permis = $_POST['modif-permis'];
        $result = $pdo->exec(
            "UPDATE utilisateur 
            SET nom = '$nom',
            prenom = '$prenom',
            date_de_naissance = '$dateNaissance',
            website = '$website',
            numero_de_telephone = '$num',
            ville = '$ville',
            diplome = '$diplome',
            email = '$mail',
            permis = '$permis'
            WHERE id_utilisateur = 1;");

        $newPara4 = $_POST['modif-para4'];
        $result = $pdo->exec(
            "UPDATE paragraphe 
            SET paragraphe = '$newPara4'
            WHERE id_paragraphe = 5;");
        echo "<script>document.location.href='admin.php'</script>";
    }
    if(isset($_POST['hidden-modif-para1']) AND $_POST['hidden-modif-para1'] == 1){
        $newPara1 = $_POST['modif-para1'];
        $result = $pdo->exec(
            "UPDATE paragraphe 
            SET paragraphe = '$newPara1'
            WHERE id_paragraphe = 1;");
        echo "<script>document.location.href='admin.php'</script>";
    }

    if(isset($_POST['hidden-modif-para2']) AND $_POST['hidden-modif-para2'] == 1){
        $newPara1 = $_POST['modif-para2'];
        $result = $pdo->exec(
            "UPDATE paragraphe 
            SET paragraphe = '$newPara1'
            WHERE id_paragraphe = 2;");
        echo "<script>document.location.href='admin.php'</script>";
    }

?>

<section class="section-admin-about">
    <h3>A propos :</h3>
    <div class="pres">
        <form action="admin.php" method="post">
            <h4>premier paragraphe</h4>
            <textarea name="modif-para1"><?php echo $paragrapheArray[0]?></textarea>
            <input type="hidden" name="hidden-modif-para1" value="1">
            <input type="submit" value="Modifier">
        </form>
        <br><br><br><br><br>
        <form action="admin.php" method="post" class="presentation">
            <input name="modif-para4" type="text" value="<?php echo $paragrapheArray[4]?>" class="titre-cv">
            <div class="row">
                <label for="">Nom :</label>
                <input name="modif-nom" type="text" placeholder="Nom" value="<?php echo $user["nom"]?>">
            </div>
            <div class="row">
                <label for="">Prénom :</label>
                <input name="modif-prenom" type="text" placeholder="Prenom" value="<?php echo $user["prenom"]?>">
            </div>
            <div class="row">
                <label for="">Date de naissance :</label>
                <input name="modif-date-naissance" type="text" placeholder="YYYY-MM-DD" value="<?php echo $user["date_de_naissance"]?>">
            </div>
            <div class="row">
                <label for="">Site web :</label>
                <input name="modif-website" type="text" value="<?php echo $user["website"]?>">
            </div>
            <div class="row">
                <label for="">Téléphone :</label>
                <input name="modif-num" type="text" value="<?php echo $user["numero_de_telephone"]?>">
            </div>
            <div class="row">
                <label for="">Ville :</label>
                <input name="modif-ville" type="text" value="<?php echo $user["ville"]?>">
            </div>
            <div class="row">
                <label for="">Diplôme :</label>
                <input name="modif-diplome" type="text" value="<?php echo $user["diplome"]?>">
            </div>
            <div class="row">
                <label for="">Email :</label>
                <input name="modif-email" type="text" value="<?php echo $user["email"]?>">
            </div>
            <div class="row">
                <label for="">Permis :</label>
                <input name="modif-permis" type="text" value="<?php echo $user["permis"]?>">
            </div>
            <input type="hidden" name="modif-user" value="1">
            <input type="submit" value="Modifier">
        </form>
        <br><br><br><br><br>
        <form action="admin.php" method="post">
            <h4>deuxième paragraphe</h4>
            <textarea name="modif-para2"><?php echo $paragrapheArray[1]?></textarea>
            <input type="hidden" name="hidden-modif-para2" value="1">
            <input type="submit" value="Modifier">
        </form>
    </div>
</section>