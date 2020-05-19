<section class="resume-section" id="resume">
    <h3>Expérience</h3>
    <div class="soulignage-bleu"></div>
    <p class="txt"><?php echo $paragrapheArray[3]?></p>
    <div class="truc-dedans">
        <?php 
        while($resume = $resultResume->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="content">
            <h4><?php echo $resume["nom"]?></h4>
            <h5><?php echo $resume["date_debut"];?> - <?php if($resume["date_fin"] == ""){echo "Present";}else{echo $resume["date_fin"];}?></h5>
            <p class="txt-pluspetit"><?php echo $resume["paragraphe"]?></p>
        </div>
        <br/>
        <?php 
        }
        ?>
    </div>
</section>
<div class="espacement-bas"></div>
<div class="espacement-bas"></div>