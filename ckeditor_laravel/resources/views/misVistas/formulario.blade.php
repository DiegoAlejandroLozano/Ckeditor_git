<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	
	<h1>Formulario</h1>

	<form action="">
		
		<p>
			<label for="areaTexto">Ingresa tu texto</label>
		</p>
		<textarea name="areaTexto" id="areaTexto" cols="30" rows="10">Hola diego</textarea>
		@ckeditor('areaTexto', ['height' => 200, 'width'=>600])

	</form>

</body>
</html>