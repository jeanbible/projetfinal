function enregistrerCours(){
	var enregCours = new FormData(document.getElementById('enregCours'));
	enregCours.append('action','enregistrer');
	$.ajax({
		url:'../php/controleurAdmin.php',
		type:'POST',
		data:enregCours,
		dataType:'json',
		async : false,
		cache : false,
		contentType : false,
		processData : false,
		success: function(message){
			//alert(message);
			//vue('enregistrer',message);
			//vue('enregistrerJSON',message);
			vue('enregistrerXML',message);
		},
		fail:function(){
			alert("Vous avez un GROS problème");
		}
	});
}
//controleur des requetes
var requetes=function(action){
switch(action){
	case 'enregistrerCours' :
		enregistrerCours();
	break;
	default :
}
}
