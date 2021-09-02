<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>{{$sms2}}</h1>
<table>
        <td>Cod </td>
        <td>Cod compra</td>
        <td>Cod Producto</td>
        <td>Descripcion</td>
        <td>Precio</td>
        <td>Cantidad</td>
        <td>Total</td>
        
        @foreach($mensaje3 as $value)
        <tr><td>{{$value->idccompradetalle}}</td>
            <td>{{$value->idcompra}}</td>
            <td>{{$value->idproducto}}</td>
            <td>{{$value->descripcion}}</td>
            <td>{{$value->precio}}</td>
            <td>{{$value->cantidad}}</td>
            <td>{{$value->total}}</td>
            <tr>
            @endforeach
            </table>
</body>
</html>