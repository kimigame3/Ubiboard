/*
// on va chercher les différents éléments de notre page
const pages = document.querySelector(".page")
const header = document.querySelector("header")
const nbPages = pages.length //nombre de page du formulaire

//on entend le changement de la page
window.onload = () => {
    //on affiche la 1ère page du formulaire
    document.querySelector(".page").style.display = "initial"

    //on affiche les numéros des pages dans l'entête
    // on parcourt la list des pages
    for(let index in pages){
        //on crée l'élément "numéro page"
        let element = document.createElement("div")
        element.classList.add("page")
    }
}*/


/*
        // à mettre dans un fichier JS

        let boxes = document.querySelectorAll("input[type='checkbox']") // On récupère toutes les checkboxes
        let values = []; // On crée un tableau pour les valeurs cochées

        // Pour chaque checkbox:
        boxes.forEach(b =>
        {
            // On ajoute un event quand elle change d'état (check / unchecked)
            b.addEventListener("change", (element) =>
            {
                let value = element.target.value; // Le nouvel état de la checkbox
                let index = values.indexOf(value); // on vérifie l'emplacement de la valeur dans le tableau

                if (index != -1) // si la valeur a un emplacement dans le tableau
                    values.splice(index, 1); // on la supprime
                else
                    values.push(value); // sinon on l'ajoute

                affichageValeurs.innerHTML = values.join(","); // on affiche les valeurs du tableau dans le <p> avec l'id affichageValeurs
            })
        });


   */