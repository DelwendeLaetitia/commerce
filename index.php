<?php 
try {
    $bdd= new PDO('mysql:host=localhost;dbname=bd_commerce','root','' );
} catch (Exception $e) {
    die( 'Erreur : ' . $e->getMessage());
}
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <title>COMMERCE</title>
  </head>

  <body>
    <div class="" style="background-image: url(./photos/bg_files/coffee-2242218_640.jpg);  background-size: cover;">
      <div class="container-fluid mb-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"
              ><img src="photos/golo.png" width="100px" height="100px"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navbarNavAltMarkup"
            >
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#"
                  >Accueil</a
                >
                <a class="nav-link" href="#">Produits</a>
                <a class="nav-link" href="#">Contacts</a>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <div class="container">
        <div class="apropos">
          <div></div>
          <h2><strong>Apropos</strong></h2>
        </div>
        <hr />
          <div class="row g-0 justify-content-around"style="border-radius:50px;">
            <div class="col-md-6" style="margin-right:100px ;">
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum, <br />
                  dolor sit amet consectetur adipisicing elit.
                  <br />
                  Perspiciatis voluptatibus porro dolore,<br />
                  eos doloribus aut, <br />
                  consequuntur voluptates suscipit eligendi itaque molestias
                  <br />
                  blanditiis amet ipsum earum officia laudantium non, <br />
                  alias esse?
                </p>
              </div>
            <div class="col-md-5" style="margin-top:-180px; margin-left: 500px;">
              <img
                src="photos/golo.png" 
                width="2050px"
                height="2050px"
                class="img-fluid rounded-circle" alt="" >
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <h2><strong> Produits</strong></h2>
        <hr />
        <?php 
   $reponse = $bdd-> query("SELECT * FROM produits WHERE libelle='lait'");
   while ($donne= $reponse->fetch()) { ?> 
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card" style="border-radius:50px;">
              <img 
                src="photos/caf.jpg"
                width="400px"
                height="400px"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Café,4500F CFA</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card"style="border-radius:50px;">
              <img 
                src="photos/scr.jpg"
                width="400px"
                height="400px"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Sucre,900FCFA</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img
                src="photos/la.jpg"
                width="400px"
                height="400px"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Lait 4000FCFA</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img
                src="photos/mi.jpg"
                width="400px"
                height="400px"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Miel,7000FCFA</h5>
              </div>
            </div>
          </div>
        </div>
        <br /><br /><br />
      </div>
    </div>
    <div class="container">
      <div class="contacts">
        <h2><strong> Contacts </strong></h2>
      </div>
      <hr />
      <div class="num text-center">
        <p>70 48 50 44</p>
      </div>
    </div>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>