<section class="secret-section invisible">
    <div class="invi-div"></div>
    <form action="index.php" method="post" class="secret-form">
        <input type="password" name="mdp" placeholder="Password"/>
        <input type="hidden" name="wrongPassword" value="1"/>
    </form>
    <?php if(isset($_POST['mdp']) AND $_POST['mdp'] == "kangourou"){ 
        $_SESSION['admin'] = 1;    
    ?>
        <script type="text/javascript">
            document.location.href="admin.php";
        </script>
        
    <?php }?>
</section>