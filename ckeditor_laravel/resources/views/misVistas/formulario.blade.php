<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Bootstrap -->
    <link href={{ asset('mis_archivos/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">

    {{-- Mis estilos --}}
	<link rel="stylesheet" href={{ asset('mis_archivos/estilo.css') }}>

	<title>Formulario</title>
</head>
<body>
	
	<h1>Formulario</h1>

	<form action="" method="post">
		{{ csrf_field() }}

		<textarea name="areaTexto" id="areaTexto" cols="30" rows="10">Hola diego</textarea>
		@ckeditor('areaTexto')

		<p>
			<input type="submit" value="Enviar">
		</p>

	</form>

	<div id="contenido">
		{!! $contenido !!}
	</div>

	<!-- Scripst Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src={{ asset('mis_archivos/bootstrap/js/bootstrap.min.js') }}></script>

</body>
</html>