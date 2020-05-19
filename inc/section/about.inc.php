<?php 
    
?>

<section class="about-section" id="about">
    <h3>Profil</h3>
    <div class="soulignage-bleu"></div>
    <p class="txt"><?php echo $paragrapheArray[0]?></p>
    <div class="truc-dedans">
        <img src="<?php echo $user["photo"]?>" alt="photo de profile">
        <div class="droite-truc-dedans">
            <h3><?php echo $paragrapheArray[4]?></h3>
            <div class="info-user">
                <div class="colonne">
                    <p><strong>&#8250; Date de naissance:</strong> <?php echo $user["date_de_naissance"]?></p>
                    <p><strong>&#8250; Site web:</strong> <?php echo $user["website"]?></p>
                    <p><strong>&#8250; Téléphone:</strong> <?php echo $user["numero_de_telephone"]?></p>
                    <p><strong>&#8250; Ville:</strong> <?php echo $user["ville"]?></p>
                </div>
                <div class="colonne">
                    <p><strong>&#8250; Age:</strong> <?php echo date("Y")-explode("-", $user["date_de_naissance"])[0]?></p>
                    <p><strong>&#8250; Diplôme:</strong> <?php echo $user["diplome"]?></p>
                    <p><strong>&#8250; Email:</strong> <?php echo $user["email"]?></p>
                    <p><strong>&#8250; Permis:</strong> <?php echo $user["permis"]?></p>
                </div>
            </div>
            <p class="sous-info-user"><?php echo $paragrapheArray[1]?></p>
        </div>
    </div>
</section>
<div class="espacement-bas"></div>
<div class="espacement-bas"></div>
<div class="espacement-bas"></div>
<div class="espacement-bas"></div>