function enregistrerCours(){
	var enregCours = new FormData(document.getElementById('enregCours'));
	enregCours.append('action','enregCours');
	$.ajax({
		url:'controleurAdmin.php',
		type:'POST',
		data:enregCours,
		dataType:'text',
		async : false,
		cache : false,
		contentType : false,
		processData : false,
		success: function(message){
			alert(message);
			//vue('enregistrer',message);
			//vue('enregistrerJSON',message);
			// vue('enregistrerXML',message);
		},
		fail:function(){
			alert("Vous avez un GROS problème");
		}
	});
}
function listerCours(){
	$.ajax({
		url:'controleurAdmin.php',
		type:'POST',
		data:{"action":'listerCours'},
		dataType:'json',
		success: function(listerCours){
			// alert(listerCours);
			// alert(JSON.stringify(listerCours));
			vue('afficherCours',listerCours);
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
	case 'listerCours' :
		listerCours();
	break;
	default :
}
}
