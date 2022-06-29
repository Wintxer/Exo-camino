
// Fonction pour afficher ou non l'input caché qui donne l'information "off" lorsque la checkbox n'est pas checked
const checkboxSubmit = (id, idHidden, idForm) => {
    if(document.getElementById(id).checked) {
        document.getElementById(idHidden).disabled = true;
    }

    // Soumission du formulaire
    document.getElementById(idForm).submit();
}

const getTitle1 = () => {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        const res = JSON.parse(this.response);
        const title = document.getElementById("title1");
        if (res[0].visibility  === "true") {
            if (title.classList.contains("hide")) {
                title.classList.remove("hide");
            }
            title.innerHTML = `<h2>${res[0].text}</h2>`;
        } else {
            title.classList.add("hide");
        }
    }
    xhttp.open("GET", "controllers/getTitle1.php");
    xhttp.send();
}

const getTitle2 = () => {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        const res = JSON.parse(this.response);
        const title = document.getElementById("title3");
        if (res[0].visibility  === "true") {
            if (title.classList.contains("hide")) {
                title.classList.remove("hide");
            }
            title.innerHTML = `<h2>${res[0].text}</h2>`;
        } else {
            title.classList.add("hide");
        }
    }
    xhttp.open("GET", "controllers/getTitle2.php");
    xhttp.send();
}

const getTitle3 = () => {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        const res = JSON.parse(this.response);
        const title = document.getElementById("title2");
        if (res[0].visibility  === "true") {
            if (title.classList.contains("hide")) {
                title.classList.remove("hide");
            }
            title.innerHTML = `<h2>${res[0].text}</h2>`;
        } else {
            title.classList.add("hide");
        }
    }
    xhttp.open("GET", "controllers/getTitle3.php");
    xhttp.send();
}
