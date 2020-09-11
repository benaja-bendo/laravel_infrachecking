<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">prenom</th>
        <th scope="col">tel</th>
        <th scope="col">mail</th>
        <th scope="col">adresse</th>
    </tr>
    </thead>
    <tbody>
    @foreach($utilisateurs as $utilisateur)
        <tr>
            <th scope="row">{{$utilisateur->name}}</th>
            <td>{{$utilisateur->prenom}}</td>
            <td>{{$utilisateur->tel}}</td>
            <td>{{$utilisateur->email}}</td>
            <td>{{$utilisateur->adresse}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
