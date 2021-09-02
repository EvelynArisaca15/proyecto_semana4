<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>{{$sms7}}</h1>
<table>
<td>Codigo</td>
        <td>Codigo</td>
        <td>Codigo ven</td>
        <td>codigo pro</td>
        <td>Descripcion</td>
        <td>Precio</td>
        <td>Cantidad</td>
        <td>Total</td>
        
        @foreach($mensaje8 as $value)
        <tr><td>{{$value->idventadetalle}}</td>
            <td>{{$value->idventa}}</td>
            <td>{{$value->idproducto}}</td>
            <td>{{$value->descripcion}}</td>
            <td>{{$value->precio}}</td>
            <td>{{$value->can}}</td>
            <td>{{$value->total}}</td>
            <tr>
            @endforeach
            </table>
</body>
</html>