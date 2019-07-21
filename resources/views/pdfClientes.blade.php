<!DOCTYPE html>
<html>
<head>
	<title>PDF - Clientes</title>
</head>
<body>
    <h1>Listado de clientes</h1>
    <table border="1">
    @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellidos}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->ciudad}}</td>
            <td>{{$cliente->email}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>