<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        h2 {
            color: #333;
        }
        b {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('assetsadmin/images/brand/brand-logo.png')}}" alt="Logo de la structure">
        <h2>Hello Admin,</h2>
        You received an email from : {{ $data['name'] }}
        <p>Here are the details:</p>
        <b>Name:</b> {{ $data['name'] }}<br>
        <b>Besoins:</b> {{ $data['subject'] }} <br>
        <b>Email:</b> {{ $data['email'] }}<br>
        <b>Phone Number:</b> {{ $data['phone_number'] }}<br>
        <b>Message:</b> {{ $data['message'] }}<br>
        <p>Thank You</p>
    </div>
</body>
</html>
