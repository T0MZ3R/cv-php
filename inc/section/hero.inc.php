<section class="hero" id="hero">
    <img class="hero-img" src="<?php echo $user["photo_hero"]?>" alt="photo montagne">
    <div class="shell">
        <div class="topshell"><p>typed.js — bash — 120x10</p></div>
        <?php if(isset($_POST['wrongPassword']) AND $_POST['wrongPassword'] == 1){?><h2>Wrong Password !</h2> <?php }?>
        <h2>$ Je suis <span class="typed"></span></h2>
    </div>
    
    <script>
        var typed = new Typed('.typed', {
            strings: [
                <?php
                $resultHero = $pdo->query("SELECT * FROM heroText");
                while($phraseHero = $resultHero->fetch(PDO::FETCH_ASSOC)){
                    echo "'".$phraseHero["phrase"]."',";
                };
                ?>
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>

</section>