function afficherCours(listerCours){
	rep="<table border=1>";
	rep+="<caption>Liste des films</caption>";
	rep+="<tr><th>NUMERO</th><th>TITRE</th><th>Description</th><th>Prérequis</th><th>Type</th><th>Logo</th></tr>";
	var taille=listerCours.length;
	for(i=0;i<taille;i++){
		ligne=listerCours[i];
		rep+="<tr><td>"+(ligne.idcours)+"</td><td>"+(ligne.titrecours)+"</td><td>"+(ligne.descriptioncours)+"</td><td>"+(ligne.prerequiscours)+"</td><td>"+(ligne.type)+"</td><td><img src='../uploads/"+(ligne.logocours)+"' width=80 height=80></td></tr>";
	}
	rep+="</table>";
	$('#contenu').html(rep);
}



var vue=function(action,donnees){
	switch(action){
    case 'afficherCours':
			afficherCours(donnees);
		break;

	}

}
