console.log("genererpdf")
try {

// Fonction qui génère un PDF à partir d'un élément HTML
    function genererpdf(prixPlace, Locate, datePlace, idconcert) {
        // Créer un nouvel objet jsPDF
        var pdf = new jsPDF();

        let svg = document.getElementById("barcode" + idconcert)
        console.log(svg)
        // pdf.addSVG(svg, 10, 10, {
        //     width: 200,
        //     height: 100
        // });
        // pdf.canvas.svg(svg, 10, 10);

        pdf.text(80, 10, "Votre billets est le :")
        pdf.text(80, 20, "Prix : " + prixPlace.innerText);
        pdf.text(80, 30, "Date : " + datePlace.innerText);
        pdf.text(80, 40, "Lieu : " + Locate.innerText);
        // pdf.text(text, 10, 40);
        // Enregistrer le document PDF
        pdf.save('billete.pdf');
    }


// Récupérer tous les boutons "buy"
    let tousLesBilletes = document.getElementsByClassName('buy');

// Ajouter un gestionnaire d'événement 'click' pour chaque bouton
    for (let i = 0; i < tousLesBilletes.length; i++) {
        tousLesBilletes[i].addEventListener('click', function (event) {
            // Récupérer le parent du bouton et générer le PDF
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
            width: 3,
            height: 60,
        });

    }
} catch (e) {

}
