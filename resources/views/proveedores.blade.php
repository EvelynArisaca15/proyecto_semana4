<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>{{$sms4}}</h1>
<table>
        <td>Codigo</td>
        <td>Ruc</td>
        <td>Documento</td>
        <td>Numero</td>
        <td>Celular</td>
        <td>direccion</td>
        
        @foreach($mensaje5 as $value)
        <tr><td>{{$value->idproveedores}}</td>
            <td>{{$value->ruc}}</td>
            <td>{{$value->iddocu}}</td>
            <td>{{$value->numero}}</td>
            <td>{{$value->celular}}</td>
            <td>{{$value->direccion}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>