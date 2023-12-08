const notyf = new Notyf({
    duration: 4000,
});

const params8 = new URLSearchParams(window.location.search);
if(params8.has('noenvoiform')){
    notyf.error("Votre formulaire de contact ne s'est pas envoyé !");
}

const const9 = new URLSearchParams(window.location.search);
if(const9.has('emailerror')){
    notyf.error("L'email que vous avez rentré n'est pas valable !");
}
if (window.location.search.includes('emailerror=true')) {
    const newURL = window.location.protocol + '//' + window.location.host + window.location.pathname;
    window.history.replaceState({ path: newURL }, '', newURL);
}

const params10 = new URLSearchParams(window.location.search);
if(params10.has('telerror')){
    notyf.error("Le numéro de téléphone entré n'est pas valide !");
}
if (window.location.search.includes('telerror=true')) {
    const newURL = window.location.protocol + '//' + window.location.host + window.location.pathname;
    window.history.replaceState({ path: newURL }, '', newURL);
}


const params11 = new URLSearchParams(window.location.search);
if(params11.has('envoiform')){
    notyf.success("Votre formulaire de contact à bien été envoyé !");
}
if (window.location.search.includes('envoiform=true')) {
    const newURL = window.location.protocol + '//' + window.location.host + window.location.pathname;
    window.history.replaceState({ path: newURL }, '', newURL);
}
