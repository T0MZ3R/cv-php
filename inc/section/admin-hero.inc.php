<?php 
    //hero section
    if(isset($_POST["hero-modif"])){
        $laPhrase = $_POST["hero-phrase-modif"];
        $varId = $_POST["hero-modif"];
        $modifResult = $pdo->exec("UPDATE heroText SET phrase = '$laPhrase' WHERE id_phrase = '$varId';");
    }
    if(isset($_POST["hero-add-table"]) AND $_POST["hero-add-table"] == 1){
        $addPhrase = $_POST['text-a-add'];
        $resultInsert = $pdo->exec("INSERT INTO heroText (phrase) VALUES ('$addPhrase');");
    }
    //$modifResult = $pdo->exec("UPDATE heroText SET phrase = "laphrase" WHERE id_phrase = '$varId';");
        
?>
<section class="section-admin-hero">
    <h3>Présentation rapide en console : (valider entre chaque modification)</h3>
        <ul class="pres-console pres">
            <?php 
            $resultHero = $pdo->query("SELECT * FROM heroText");
            while($phraseHero = $resultHero->fetch(PDO::FETCH_ASSOC)){
                $varTestIf = "hero-".$phraseHero['id_phrase']."-supp";
                if(isset($_POST["$varTestIf"]) AND $_POST["$varTestIf"] == 1){
                    $varId = $phraseHero['id_phrase'];
                    $supprResult = $pdo->exec("DELETE FROM heroText WHERE id_phrase = '$varId';");
                }else{
                ?>
                    <li>
                        <form action="admin.php" method="post">
                            <input type="text" name="hero-phrase-modif" value="<?php echo $phraseHero["phrase"];?>">
                            <input type="hidden" name="hero-modif" value="<?php echo $phraseHero["id_phrase"]?>">
                            <input type="submit" value="Valider">
                        </form>
                        <form action="admin.php" method="post">
                            <input type="hidden" name="hero-<?php echo $phraseHero["id_phrase"]?>-supp" value="1">
                            <input type="submit" value="Supprimer">
                        </form>
                    </li>
            <?php 
                }
            };
            ?>
        </ul>
        <button class="add-line-hero">Ajouter une ligne</button>
    <form action=""></form>
</section>