<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$sms}}</h1>
   <table>
        <td>Codigo</td>
        <td>Nombres</td>
        <td>Documento</td>
        <td>Numero</td>
        <td>sexo</td>
        
        @foreach($dato as $value)
        <tr><td>{{$value->idcliente}}</td>
            <td>{{$value->ape_nom}}</td>
            <td>{{$value->iddocu}}</td>
            <td>{{$value->numero}}</td>
            <td>{{$value->sexo}}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>