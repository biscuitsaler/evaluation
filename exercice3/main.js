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
	    var brand = encodeURIComponent( $('#brand').val() ); // Encodage des données avec encodeURIComponent
	    var model = encodeURIComponent( $('#model').val() ); // .val() renvoie la valeur du formulaire
		var year = encodeURIComponent( $('#year').val() ); // Encodage des données avec encodeURIComponent
	    var color = encodeURIComponent( $('#color').val() ); // .val() renvoie la valeur du formulaire
	    if(username != "" && password != ""){ // On verifie ainsi que les deux variables ne sont pas vides
	        $.ajax({
	            url : "login.php", // on donne l'URL du fichier de traitement
	            type : "POST", // la requête est de type POST
	            data : "brand=" + brand + "&model=" + model + "&year=" + year + "&color=" + color // et on envoie nos données
	        });
	    }
	    else{
	        // Vous pouvez ici penser à afficher un élément "caché" de votre HTML comportant l'ID "#missing"
	        $('#missing').show();
	    }
	});


});
