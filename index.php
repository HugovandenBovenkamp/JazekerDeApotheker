<?php
   include("includes/dbconnect.php");
   include("includes/head.php");
?>
  
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 offset-sm-1">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/pharmacy.jpg" class="d-block w-100" alt="Medewerker achter balie">
          </div>
          <div class="carousel-item">
            <img src="assets/desk.jpg" class="d-block w-100" alt="Balie">
          </div>
          <div class="carousel-item">
            <img src="assets/drugs_pharmacy.jpg" class="d-block w-100" alt="Medicijnen">
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-3 offset-sm-1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2406.8625226715694!2d4.7493073163410395!3d52.89689871598028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf4883321d7567%3A0x9344edc0760d6d5c!2sAlphega%20apotheek%20Julianadorp!5e0!3m2!1snl!2snl!4v1611930859827!5m2!1snl!2snl" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-10 offset-sm-1">
      <h2>Onze service</h2>
      <div class="home-blocks-group">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="home-block block1">
              <h3>Herhaalservice</h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="home-block block2">
              <h3>Medicijneoverzicht</h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="home-block block3">
              <h3>Inschrijven</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <h3>Openingstijden</h3>
          <ul>
            <li>Maandag: 8:00 - 17:00</li>
            <li>Dinsdag: 8:00 - 17:00</li>
            <li>Woensdag: 8:00 - 17:00</li>
            <li>Donderdag: 8:00 - 17:00</li>
            <li>Vrijdag: 8:00 - 17:00</li>
            <li>Zaterdag 8:00 - 15:00</li>
            <li>Zondag: Gesloten</li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-1">
          <h3>Adres</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <h3>Nieuws</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    include("includes/footer.php");
?>
