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

    <h2>Storico</h2>

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
  
    <div class="table-responsitive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Azione</th>
                        <th>Descrizione</th>
                        <th>Data</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Aggiunto Operatore</td>
                        <td>Aggiunto Assuntina Di Meo al db operatori</td>
                        <td>12/09/2023 ore 11:45:05</td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>Aggiunto Operatore</td>
                        <td>Aggiunto Carmelona Scogliamiglio al db operatori</td>
                        <td>12/09/2023 ore 11:50:05</td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>Aggiunto Operatore</td>
                        <td>Aggiunto Gennarino Buccirosso al db operatori</td>
                        <td>12/09/2023 ore 11:55:05</td>
                      </tr>

                      <tr>
                        <td>5</td>
                        <td>Aggiunto Prodotto</td>
                        <td>Aggiunto 20 x liscio perfetto (TIGI) al db prodotti</td>
                        <td>12/09/2023 ore 12:05:05</td>
                      </tr>

                      <tr>
                        <td>6</td>
                        <td>Aggiunto Prodotto</td>
                        <td>Aggiunto 50 x Asided (L'oreal) al db prodotti</td>
                        <td>12/09/2023 ore 12:08:05</td>
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