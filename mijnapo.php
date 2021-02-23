<?php
    include_once('includes/head.php');
?>


<div class="col-md-10 offset-1">
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

    <form action="includes/registreren.php" method="post">
        <div class="form-row">
            <h3>Registreren</h3>
            <div class="form-group col-md-6">
                <label>Gebruikersnaam</label>
                <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam..">
            </div>
            <div class="form-group col-md-6">
                <label>Volledige naam</label>
                <input type="text" class="form-control" name="fullname" placeholder="Volledige naam..">
            </div>
            <div class="form-group col-md-6">
                <label>E-mailadres</label>
                <input type="text" class="form-control" name="email" placeholder="E-mailadres..">
            </div>
            <div class="form-group col-md-6">
                <label>Wachtwoord</label>
                <input type="password" class="form-control" name="pw" placeholder="Wachtwoord..">
            </div>
            <div class="form-group col-md-6">
                <label>Wachtwoord</label placeholder="Wachtwoord">
                <input type="password" class="form-control" name="pwrep" placeholder="Herhaal wachtwoord..">
            </div>
            <button type="submit" name="submit" class="button-form">Registreren</button>
        </div>
    </form>
</div>

<?php
    include("includes/footer.php");
?>