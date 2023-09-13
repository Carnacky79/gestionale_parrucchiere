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
  <link rel="stylesheet" href="storage.css">
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
    
    <h2>Magazzino</h2>

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
        <div class="col-md">
                      <h5>Usa questa sezione per aggiungere Prodotti al Magazzino: <br /></h5>

                      <div  class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome Prodotto</span>
                        <input type="text" class="form-control" placeholder="Prodotto" aria-label="Prodotto" aria-describedby="basic-addon1">
                        </div> 

                        <div  class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Marca</span>
                        <input type="text" class="form-control" placeholder="Marca" aria-label="Marca" aria-describedby="basic-addon1">
                        </div> 

                        <div  class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Quantità</span>
                        <input type="number" class="form-control" placeholder="Quantità" aria-label="Amount" aria-describedby="basic-addon1">
                        </div> 

                        <div  class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Prezzo Unità</span>
                        <input type="number" step="any" class="form-control" placeholder="Prezzo Unità" aria-label="Amount_each" aria-describedby="basic-addon1">
                        </div> 

                        <div class="col-12">
                        <button class="btn btn-primary" type="submit">Aggiungi Prodotti</button>
                        </div>
        </div>


        <div class="col-md">
        <div class="table-responsitive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome Prodotto</th>
                        <th>Marca</th>
                        <th>Quantità</th>
                        <th>Prezzo unità</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Asided</td>
                        <td>Loreal</td>
                        <td>50</td>
                        <td>10 $</td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>Liscio perfetto</td>
                        <td>Tigi</td>
                        <td>20</td>
                        <td>25 $</td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>Ogni riccio è capriccio</td>
                        <td>TestaNera</td>
                        <td>5</td>
                        <td>25 $</td>
                      </tr>

                      <tr>
                        <td>4</td>
                        <td>Meches a strisce pedonali</td>
                        <td>Farmagan</td>
                        <td>65</td>
                        <td>50 $</td>
                      </tr>

                      <tr>
                        <td>5</td>
                        <td>Effetto Leopardato</td>
                        <td>Sunsilk</td>
                        <td>100</td>
                        <td>8 $</td>
                      </tr>

                    </tbody>
                </table>
        </div>
        </div>
      </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>


</html>