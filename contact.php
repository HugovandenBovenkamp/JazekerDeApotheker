<?php
   include("includes/head.php");
?>

<div class="col-md-10 offset-1">
    <form>
        <div class="form-row">
            <h3>Contact</h3>
            <div class="form-group col-md-6">
                <label for="gebruikersnaam">Voornaam</label>
                <input type="text" class="form-control" id="#" required>
            </div>
            <div class="form-group col-md-6">
                <label for="wachtwoord">Achternaam</label>
                <input type="text" class="form-control" id="#" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mailadres</label>
                <input type="email" class="form-control" id="#" required>
            </div>
            <div class="form-group col-md-6">
                <label for="Textbox">Bericht</label>
                <textarea class="form-control" required></textarea>
            </div>
            <button type="submit" class="button-form">Registreren</button>
        </div>
    </form>
</div>



<?php
   include("includes/footer.php");
?>