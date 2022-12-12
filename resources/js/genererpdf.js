// Affiche "genererpdf" dans la console
console.log("genererpdf");

try {
    // Déclare la fonction "genererpdf" qui génère un PDF à partir d'un élément HTML
    function genererpdf(prixPlace, Locate, datePlace, idconcert) {
        // Créer un nouvel objet jsPDF
        var pdf = new jsPDF();

        // Récupère l'élément HTML avec l'ID "barcode" + l'ID du concert
        let svg = document.getElementById("barcode" + idconcert)

        // Affiche l'élément HTML dans la console
        console.log(svg)

        // Ajoute du texte au PDF à la position (80, 10)
        pdf.text(80, 10, "Votre billets est le :")

        // Ajoute du texte au PDF à la position (80, 20) avec la valeur du prix du billet
        pdf.text(80, 20, "Prix : " + prixPlace.innerText);

        // Ajoute du texte au PDF à la position (80, 30) avec la date du concert
        pdf.text(80, 30, "Date : " + datePlace.innerText);

        // Ajoute du texte au PDF à la position (80, 40) avec le lieu du concert
        pdf.text(80, 40, "Lieu : " + Locate.innerText);

        // Enregistre le document PDF
        pdf.save('billete.pdf');
    }

    // Récupère tous les éléments HTML avec la classe "buy"
    let tousLesBilletes = document.getElementsByClassName('buy');

    // Ajoute un gestionnaire d'événement 'click' pour chaque élément HTML avec la classe "buy"
    for (let i = 0; i < tousLesBilletes.length; i++) {
        tousLesBilletes[i].addEventListener('click', function (event) {
            // Récupère le parent de l'élément HTML cliqué
            let billetsClickerPrix   = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("cost")
            let billetsClickerLocate = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("location")
            let billetsClickerDate   = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("date")
            let idconcert            = billetsClickerPrix[0].dataset.idconcert

            genererpdf(billetsClickerPrix[0], billetsClickerLocate[0], billetsClickerDate[0], idconcert);


            let billetsClickerNumeroPlace = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("numeroPlace")
            let billetsClickerNom         = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("bandname")
            const string                  = billetsClickerNumeroPlace[0].innerText
            const regex                   = /\d+/; // La regex recherche les nombres entiers dans la chaîne
            const number                  = string.match(regex)[0]; // Récupère le premier nombre entier trouvé
            console.log(number); // Affiche "2356"

            console.log(billetsClickerNom)
        });

    }

    for (let i = 0; i < tousLesBilletes.length; i++) {
        // Récupérer le parent du bouton et générer le PDF
        let billetsClickerPrix        = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("cost")
        let billetsClickerLocate      = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("location")
        let billetsClickerDate        = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("date")
        let billetsClickerNumeroPlace = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("numeroPlace")
        let billetsClickerNom         = tousLesBilletes[i].parentNode.parentNode.getElementsByClassName("bandname")
        let idconcert                 = billetsClickerPrix[0].dataset.idconcert
        const string                  = billetsClickerNumeroPlace[0].innerText
        const regex                   = /\d+/; // La regex recherche les nombres entiers dans la chaîne
        const number                  = string.match(regex)[0]; // Récupère le premier nombre entier trouvé
        // console.log("Resulat ",number+" " + idconcert + number + billetsClickerNom[0].innerText);
        JsBarcode("#barcode" + idconcert, idconcert + number + billetsClickerNom[0].innerText, {
            width: 3, height: 60,
        });

    }
} catch (e) {

}



