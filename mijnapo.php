<?php
    include_once('includes/head.php');
?>


<div class="container-fluid col-md-10 offset-1 form">
    <form action="includes/inloggen.php" method="post">
        <div class="form-row">
            <h3>Inloggen</h3>
            <div class="form-group col-md-6">
                <label for="gebruikersnaam">Gebruikersnaam</label>
                <input type="text" class="form-control" name="name" placeholder="Gebruikersnaam..">
            </div>
            <div class="form-group col-md-6">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" class="form-control" name="pwd" placeholder="Wachtwoord..">
            </div>
            <button type="submit" name="submit" class="button-form">Inloggen</button>
        </div>        
    </form>
    <span id="register" class="form-text text-muted">Nog geen account? Klik <a href="registratiepagina.php">hier</a> hier om een account aan te maken.</span>
</div>



<?php
    include("includes/footer.php");
?>