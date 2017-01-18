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
	    Pseudo : <input type="text" name="username" id="username" /><br />
	    Message : <input type="text" name="password" id="password"><br />
	    <input type="submit" name="submit" value="Envoyer" id="envoi" />
	</form>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="main.js"></script>
</body>
</html>
