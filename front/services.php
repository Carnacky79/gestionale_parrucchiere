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
    
    <h2>Servizi</h2>

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

                      <h5>Usa questa sezione per aggiungere Servizi: <br /></h5>

                        <div  class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">
                        </div> 

                        <div class="form-group">
                        <span class="input-group-text" id="basic-addon1">Descrizione</span>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <br>

                        <div  class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Durata</span>
                        <input type="number" class="form-control" placeholder="Durata" aria-label="Durata" aria-describedby="basic-addon1">
                        </div> 

                        <div  class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Prezzo</span>
                        <input type="number" step="any" class="form-control" placeholder="Prezzo" aria-label="Prezzo" aria-describedby="basic-addon1">
                        </div>

                        <div id="cus" class="col-12">
                        <button class="btn btn-primary" type="submit">Aggiungi Servizi</button>
                        </div>

        </div>
        
        <div class="col-md">

                <div class="table-responsitive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Durata</th>
                        <th>Prezzo</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Piega</td>
                        <td>Pigj o phon e t sciutt</td>
                        <td>30min/45</td>
                        <td>10 $</td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>Colore</td>
                        <td>Pigj o color e t schiatt ngap</td>
                        <td>1h</td>
                        <td>25 $</td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>Decolorazione</td>
                        <td>Pigj a decolorazion e t schiatt ngap</td>
                        <td>1h</td>
                        <td>25 $</td>
                      </tr>

                      <tr>
                        <td>4</td>
                        <td>Permanente</td>
                        <td>Pigj a permanent e t schiatt ngap</td>
                        <td>1h</td>
                        <td>50 $</td>
                      </tr>

                      <tr>
                        <td>5</td>
                        <td>Shampoo</td>
                        <td>Pigj o shamp e t schiatt ngap</td>
                        <td>10 min</td>
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