<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>{{$sms5}}</h1>
<table>
        <td>Codigo</td>
        <td>Nombres</td>
        <td>Usuario</td>
        <td>Pasword</td>
        
        
        @foreach($mensaje6 as $value)
        <tr><td>{{$value->idusuario}}</td>
            <td>{{$value->ape_nom}}</td>
            <td>{{$value->use_use}}</td>
            <td>{{$value->use_pass}}</td>
            
        </tr>
        @endforeach
    </table>
</body>
</html>