<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Roboto+Slab:wght@300&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta author="CryptoTurtle()">
  <meta description="Gestionale Parrucchiere">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="customers.css">
  <title>CV Saloon DashBoard</title>
</head>

<body>

    <div class="header-image">
    <figure class="text-center">
    <blockquote class="blockquote">
    <h1>Amministrazione CV Saloon</h1>
    </blockquote>
    <figcaption class="blockquote-footer">
    Supporto gestionale: <cite title="Source Title">CEO Francesco Lombardi eggweb@cnsacc.com tel: (+39)348 376 0064</cite>
    </figcaption>
    </figure>
    </div>

   <h2>Clienti</h2> 

  <div class="offcanvas offcanvas-start show text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
    <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasDarkLabel">Menu Amministratore</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvasDark" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    <p><a href="storage.php">Magazzino</a></p>
    <p><a href="reservations.php">Prenotazioni - Calendario</a></p>
    <p><a href="op.php">Operatori</a></p>
    <p><a href="services.php">Servizi</a></p>
    <p><a href="customers.php">Clienti</a></p>
    <p><a href="history.php">Storico</a></p>
    <p><a href="aboutus.php">Contatti</a></p>
    </div>
    </div>

    <div class="container">
    <div class="row text-center">

                        <h5>Usa questa sezione per aggiungere clienti al database: <br /></h5>

                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Cognome</span>
                        <input type="text" class="form-control" placeholder="Cognome" aria-label="Cognome" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Indirizzo</span>
                        <input type="text" class="form-control" placeholder="Indirizzo" aria-label="Indirizzo" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Telefono</span>
                        <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>

                        
                        <div class="col-12">
                          <br>
                        <button class="btn btn-primary" type="submit">Aggiungi Cliente</button>
                          <br>
                          <br>
                         </div>

  </div>  


  <div class="table-responsitive">
                  <div class="text-center">
                  <h5>I miei Clienti: </h5>
                  <br>
                  <br>
</div>
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Indirizzo</th>
                        <th>Telefono</th>
                        <th>Email</th>

                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Assuntina</td>
                        <td>Di Meo</td>
                        <td>Via Mare Cristallino, 52, 80070, Bacoli(NA)</td>
                        <td>356-9685789</td>
                        <td>assu.dimeo@gmail.com</td>

                      </tr>

                      <tr>
                        <td>2</td>
                        <td>Carmelona</td>
                        <td>Scogliamiglio</td>
                        <td>Via Mare Spuorc, 15, 80070, Bacoli(NA)</td>
                        <td>356-9685789</td>
                        <td>carm.scogl@gmail.com</td>

                      </tr>

                      <tr>
                        <td>3</td>
                        <td>Gennarino</td>
                        <td>Buccirosso</td>
                        <td>Via Poseidonia, 65a, 80070, Bacoli(NA)</td>
                        <td>356-9685789</td>
                        <td>genny.bucc@gmail.com</td>

                      </tr>

                      <tr>
                        <td>4</td>
                        <td>O Proprietarj</td>
                        <td>Admin</td>
                        <td>Via admin, 65a, 80070, Bacoli(NA)</td>
                        <td>356-9685789</td>
                        <td>admin@gmail.com</td>

                      </tr>

                      <tr>
                        <td>5</td>
                        <td>O Proprietarj</td>
                        <td>Admin</td>
                        <td>Via admin, 65a, 80070, Bacoli(NA)</td>
                        <td>356-9685789</td>
                        <td>admin@gmail.com</td>

                      </tr>

                      <tr>
                        <td>6</td>
                        <td>O Proprietarj</td>
                        <td>Admin</td>
                        <td>Via admin, 65a, 80070, Bacoli(NA)</td>
                        <td>356-9685789</td>
                        <td>admin@gmail.com</td>

                      </tr>

                      <tr>
                        <td>7</td>
                        <td>O Proprietarj</td>
                        <td>Admin</td>
                        <td>Via admin, 65a, 80070, Bacoli(NA)</td>
                        <td>356-9685789</td>
                        <td>admin@gmail.com</td>

                      </tr>

                      <tr>
                        <td>8</td>
                        <td>O Proprietarj</td>
                        <td>Admin</td>
                        <td>Via admin, 65a, 80070, Bacoli(NA)</td>
                        <td>356-9685789</td>
                        <td>admin@gmail.com</td>

                      </tr>
                      
                    </tbody>
                </table>

        </div>
      </div>
    </div>
  </div>
</div>  
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>


</html>