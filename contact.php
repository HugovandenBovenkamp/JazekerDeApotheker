<?php
   include_once('includes/head.php');
?>

<div class="col-md-10 offset-1">
    <form>
        <div class="form-row">
            <h3>Contact</h3>
            <div class="form-group col-md-6">
                <label for="gebruikersnaam">Voornaam</label>
                <input type="text" class="form-control" name="firstName" id="#" placeholder="Voornaam..">
            </div>
            <div class="form-group col-md-6">
                <label for="wachtwoord">Achternaam</label>
                <input type="text" class="form-control" name="lastName" id="#" placeholder="Achternaam..">
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mailadres</label>
                <input type="text" class="form-control" name="email" id="#" placeholder="E-mailadres..">
            </div>
            <div class="form-group col-md-6">
                <label for="Textbox">Bericht</label>
                <textarea class="form-control" name="textbox" placeholder="Voer hier uw bericht in.."></textarea>
            </div>
            <button type="submit" name="submit" class="button-form">Verzenden</button>
        </div>
    </form>
</div>


<?php
   include("includes/footer.php");
?>