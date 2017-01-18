$(document).ready(function(){
    $('#clickForGet').click(function(e){ 
        // L'utilisateur a bien cliqué sur le bouton
        load_html_content();
    });

	function load_html_content(){
	    $.ajax({
	        method: 'GET',
	        url: 'informations.php',
	        data: {
	            "action": "getHtmlData"
	        },
	    })
	    .done(function(data){
	        $('#zone').html(data);
	    });
	}


	$('#envoi').click(function(e){
	    e.preventDefault(); // Le bouton n'enverra pas le formulaire
	    var username = encodeURIComponent( $('#username').val() ); // Encodage des données avec encodeURIComponent
	    var password = encodeURIComponent( $('#password').val() ); // .val() renvoie la valeur des formulaires, donc les contenus des champs #username et #password
	    if(username != "" && password != ""){ // On verifie ainsi que les deux variables ne sont pas vides
	        $.ajax({
	            url : "login.php", // on donne l'URL du fichier de traitement
	            type : "POST", // la requête est de type POST
	            data : "username=" + username + "&password=" + password // et on envoie nos données
	        });
	    }
	    else{
	        // Vous pouvez ici penser à afficher un élément "caché" de votre HTML comportant l'ID "#missing"
	        $('#missing').show();
	    }
	});


});
