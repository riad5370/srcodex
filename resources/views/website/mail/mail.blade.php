<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Name: {{ $validatedData['name'] }}</h3>
    <h4>Email: {{ $validatedData['email'] }}</h4>
    <h4>Subject: {{ $validatedData['subject'] }}</h4>
    <p>message: {{ $validatedData['message'] }}</p>
</body>
</html>