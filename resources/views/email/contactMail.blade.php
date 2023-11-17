<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #6ec25b;
        }
        b {
            font-weight: bold;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        header{
            background-color: #030d26;
            color: #6ec25b;
            padding: 30px;
            text-align: center;
            padding-top: 60px;
        }
        .titre{
            color: #6ec25b;
            font-weight: bold;
            font-size: 30px;
        }
        a{
            color:#030d26 ;
            font-weight: bold;
        }
        footer{
            background-color: #6ec25b;
            padding-top: 20px;
            padding-bottom: 60px;
            position: absolute;
            width: 100%;
            bottom: 0px;
        }
    </style>
</head>
<body>
    <div style="background-color: #6ec25b;" class="p-2">

    </div>
    <header>

                <span class="titre">NOUVEAU MESSAGE</span>
    </header>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
              <div class="text-center">
                <img src="{{ asset('/img/svg/consultingpress-logo-dark-green.png')}}" alt="Logo de la structure" class="img-fluid">
              </div>
              <h2>Bonjour Admin,</h2>
              <p>Vous avez reçu un email de :</p>
              <b>Nom :</b> {{ $data['name'] }}<br>
              <b>Sujet :</b> {{ $data['subject'] }}<br>
              <b>Email :</b> {{ $data['email'] }}<br>
              <b>Numéro de téléphone :</b> {{ $data['phone_number'] }}<br>
              <b>Message :</b> {{ $data['message'] }}<br><br><br><br>
              <p>Merci</p>

            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-4">
                    Designed and Developed by <a href="https://www.e-build.tn">Ebuild</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
