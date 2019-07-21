<!DOCTYPE html>
<html>
<head>
	<title>PDF - Información del cliente</title>
</head>
<body>
    <h1>GesBank de {{$nombre}}</h1>
    <p>
    Hola {{$nombre}} y bienvenido/a a GesBank Online, el mayor gestor de cuenta bancaria online del mundo.
    </p>
    <p>Estos son los datos que has introducidopara crear tu usuario:</p>
    <ul>
        <li>
            Nombre: {{$nombre}}
        </li>
        <li>
            Apellidos {{$apellidos}}
        </li>
        <li>
            Teléfono: {{$telefono}}
        </li>
        <li>
            Ciudad: {{$ciudad}}
        </li>
        <li>
            DNI: {{$dni}}
        </li>
        <li>
            Email: {{$email}}
        </li>
    </ul>
</body>
</html>