const notyf = new Notyf({
    duration: 4000,
});

const params = new URLSearchParams(window.location.search);
if(params.has('inscription')){
    notyf.success('Vous êtes bien inscrit !');
}

const params2 = new URLSearchParams(window.location.search);
if(params2.has('noinscription')){
    notyf.error('Veuillez réessayer !');
}

const params3 = new URLSearchParams(window.location.search);
if(params3.has('connexion')){
    notyf.error('Mauvais identifiants !');
}

const params4 = new URLSearchParams(window.location.search);
if(params4.has('deconnexion')){
    notyf.success('Vous êtes déconnecté !');
}

const params5 = new URLSearchParams(window.location.search);
if(params5.has('noconnexion')){
    notyf.error('Veuillez vous connecté !');
}