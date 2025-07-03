<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <title>validation par mail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    body {


      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .card {
      max-width: 30em;
      flex-direction: row;
      background-color: #009FE3;
      border: 0;
      box-shadow: 0 7px 7px rgba(0, 0, 0, 0.18);
      margin: 3em auto;
    }

    .card.dark {
      color: #fff;
    }

    .card.card.bg-light-subtle .card-title {
      color: dimgrey;
    }

    .card img {
      max-width: 25%;
      margin: auto;
      padding: 0.5em;
      border-radius: 0.7em;
    }

    .card-body {
      display: flex;
      justify-content: space-between;
    }

    .text-section {
      max-width: 100%;
    }

    .cta-section {
      max-width: 40%;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      justify-content: space-between;
    }

    .cta-section .btn {
      padding: 0.3em 0.5em;
      /* color: #696969; */
    }

    .card.bg-light-subtle .cta-section .btn {
      background-color: #009FE3;
      border-color: #898989;
    }

    @media screen and (max-width: 475px) {
      .card {
        font-size: 0.9em;
      }
    }
  </style>
</head>

<body>

  <div class="container mt-5">

    <div class="card bg-light-subtle mt-4">

      <div class="card-body">
        <div class="text-section">
          <h2>Message de contact reçu depuis le site IICAC-FV</h2>
          <h6 class="card-text">Nom et prenom: <span> {{ $details['nom_prenom'] }}</span></h6>
          <h6 class="card-text">E-mail: <span>{{ $details['email'] }}</span></h6>
          <h6 class="card-text">Numero de telephone: <span>{{ $details['numero'] }}</span></h6>
          <h6 class="card-text">Sujet: <span>{{ $details['suject'] }}</span></h6>
          <h6 class="card-text">Message: <span>{{ $details['message'] }}</span></h6>

        </div>

      </div>
    </div>
  </div>
</body>

</html>




</body>