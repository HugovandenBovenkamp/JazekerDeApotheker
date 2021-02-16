<?php
    include("includes/head.php");
?>


<div class="col-md-10 offset-1">
    <form>
        <div class="form-row">
            <h3>Inloggen</h3>
            <div class="form-group col-md-6">
                <label for="gebruikersnaam">Gebruikersnaam</label>
                <input type="email" class="form-control" id="#">
            </div>
            <div class="form-group col-md-6">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" class="form-control" id="#">
            </div>
            <button type="submit" class="button-form">Inloggen</button>
        </div>        
    </form>

    <form>
        <div class="form-row">
            <h3>Registreren</h3>
            <div class="form-group col-md-6">
                <label for="gebruikersnaam">Gebruikersnaam</label>
                <input type="text" class="form-control" id="#">
            </div>
            <div class="form-group col-md-6">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" class="form-control" id="#">
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mailadres</label>
                <input type="email" class="form-control" id="#">
            </div>
            <div class="form-group col-md-6">
                <label for="adres">Adres</label>
                <input type="text" class="form-control" id="#">
            </div>
            <div class="form-group col-md-6">
                <label for="adres">Woonplaats</label>
                <input type="text" class="form-control" id="#">
            </div>
            <div class="form-group col-md-6">
                <label for="provincie">Provincie</label>
                <input type="text" class="form-control" id="#">
            </div>
            <div class="form-group col-md-6">
                <label for="postcode">Postcode</label>
                <input type="text" class="form-control" id="#">
            </div>
            <button type="submit" class="button-form">Registreren</button>
        </div>
    </form>
</div>




<?php
    include("includes/footer.php");
?>