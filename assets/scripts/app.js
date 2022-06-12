
// Fonction pour afficher ou non l'input caché qui donne l'information "off" lorsque la checkbox n'est pas checked
const checkboxSubmit = (id, idHidden, idForm) => {
    if(document.getElementById(id).checked) {
        document.getElementById(idHidden).disabled = true;
    }

    // Soumission du formulaire
    document.getElementById(idForm).submit();
}