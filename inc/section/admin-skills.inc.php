<?php 
    //Skills section
    if(isset($_POST["skills-modif"])){
        $laPhrase = $_POST["skills-phrase-modif"];
        $lePourcentage = $_POST["skills-pourcentage-modif"];
        $varId = $_POST["skills-modif"];
        $modifResult = $pdo->exec("UPDATE competences SET nom = '$laPhrase', pourcentage = '$lePourcentage' WHERE id_competence = '$varId';");
    }
    if(isset($_POST["skills-add-table"]) AND $_POST["skills-add-table"] == 1){
        $addPhrase = $_POST['text-a-add'];
        $addPourcentage = $_POST['pourcentage-a-add'];
        $resultInsert = $pdo->exec("INSERT INTO competences (nom,pourcentage) VALUES ('$addPhrase',$addPourcentage);");
    }
        
?>
<section class="section-admin-skills" id="adminSkills">
    <h3>Compétences :</h3>
    <ul class="pres-console pres">
            <?php 
            $resultSkills = $pdo->query("SELECT * FROM competences");
            while($skills = $resultSkills->fetch(PDO::FETCH_ASSOC)){
                $varTestIf = "skills-".$skills['id_competence']."-supp";
                if(isset($_POST["$varTestIf"]) AND $_POST["$varTestIf"] == 1){
                    $varId = $skills['id_competence'];
                    $supprResult = $pdo->exec("DELETE FROM competences WHERE id_competence = '$varId';");
                }else{
                ?>
                    <li>
                        <form action="admin.php#adminSkills" method="post">
                            <input type="text" name="skills-phrase-modif" value="<?php echo $skills["nom"];?>">
                            <input type="text" name="skills-pourcentage-modif" value="<?php echo $skills["pourcentage"];?>">
                            <input type="hidden" name="skills-modif" value="<?php echo $skills["id_competence"]?>">
                            <input type="submit" value="Valider">
                        </form>
                        <form action="admin.php#adminSkills" method="post">
                            <input type="hidden" name="skills-<?php echo $skills["id_competence"]?>-supp" value="1">
                            <input type="submit" value="Supprimer">
                        </form>
                    </li>
            <?php 
                }
            };
            ?>
        </ul>
        <button class="add-line-skills">Ajouter une ligne</button>
    </div>
</section>