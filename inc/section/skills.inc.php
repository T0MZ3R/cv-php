<section class="skills-section" id="skills">
    <h3>Compétence</h3>
    <div class="soulignage-bleu"></div>
    <p class="txt"><?php echo $paragrapheArray[2]?></p>
    <div class="truc-dedans">
        <?php 
        $i = 1;
        $resultSkills = $pdo->query("SELECT * FROM competences");
        while($skills = $resultSkills->fetch(PDO::FETCH_ASSOC)){ 
            if($i == 1){ ?>
                <div class="saut-skills">
            <?php } ?>
                
            <div class="bloc-skills">
                    <label for="file"><?php echo $skills["nom"]?></label>
                    <p class="pourcentage"><?php echo $skills["pourcentage"]."%"?></p>
                    <progress id="file" max="100" value="<?php echo $skills["pourcentage"]?>"> <?php echo $skills["pourcentage"]."%"?></progress>
            </div>
                
        <?php
            if($i == 2){ ?>
                </div>
            <?php }
            $i++;
            if($i == 3){
                $i = 1;
            }
        }?>
    </div>
</section>
<div class="espacement-bas"></div>
<div class="espacement-bas"></div>
<div class="espacement-bas"></div>
<div class="espacement-bas"></div>