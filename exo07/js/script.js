function changerCouleur() {
    document.getElementById("titrePrincipale").style.color = "blue";

    var elements = document.getElementsByTagName("h2");
    for (const element of elements) {
        element.style.color = "blue";
    }
}

function effacerTexte() {
    document.getElementById("paragraphe1").innerHTML = "";
    document.getElementById("paragraphe2").innerHTML = "";
    document.getElementById("paragrapheDroite").innerHTML = "";
}