<?php
    include_once('includes/head.php');
?>


<div class="container col-md-10 offset-1">
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

    <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Vul aub alle velden in!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Voer een geldige gebruikersnaam in!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Voer een geldig E-mailadres in!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>De wachtwoorden komen niet overeen!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Er ging iets fout, probeer het nog een keer!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Gebruikersnaam is al in gebruik!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>U bent ingelogd!</p>";
        }
    }
?>
</div>




<?php
    include_once('includes/footer.php');
?>