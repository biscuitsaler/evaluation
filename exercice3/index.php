<!DOCTYPE html>
<html lang="fr">
<head>
    <title>AJAX : $_GET</title>
</head>
<body>
    <button id="clickForGet">Recuperer les informations</button>
    <section id="zone"></section>
	<hr>
	<form method="POST" action="login.php">
	    Brand : <input type="text" name="brand" id="brand" /><br />
	    Model : <input type="text" name="model" id="model"><br />
		Year  : <input type="text" name="year" id="year" /><br />
		Color : <input type="text" name="color" id="color" /><br />
	    <input type="submit" name="submit" value="Envoyer" id="envoi" />
	</form>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="main.js"></script>
</body>
</html>
