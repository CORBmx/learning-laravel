<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>lindos pinshes ushers:</h1>
    @foreach($users as $user)
        <h4>Usuario: {{$user->name}}</h4>
        <p>
        </p>
    @endforeach
</body>
</html>
