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
        <td>Serie</td>
        <td>Dato</td>
        <td>Fecha</td>
        <td>Igv</td>
        <td>Sub-Total</td>
        <td>Total</td>
        
        @foreach($mensaje8 as $value)
        <tr><td>{{$value->idcompra}}</td>
            <td>{{$value->serie}}</td>
            <td>{{$value->num_corre}}</td>
            <td>{{$value->fec_rec}}</td>
            <td>{{$value->igv_total}}</td>
            <td>{{$value->sub_total}}</td>
            <td>{{$value->total}}</td>
            <tr>
            @endforeach
            </table>
</body>
</html>