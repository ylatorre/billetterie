try {
    // Récupérer les informations sur le concert à partir de l'URL de la page
    let infoConcert       = getCurrentURL().split('/').pop(),
        IdConcert         = infoConcert.split(';')[0],
        PlaceSelectionner = infoConcert.split(';')[1],
        PrixPlace         = infoConcert.split(';')[2];

    // Récupérer l'élément DOM du bouton de paiement
    let payBtn = document.getElementById('payBtn');

    // Décomposer la liste des places sélectionnées en un tableau
    let arrayPlace = PlaceSelectionner.split(',');

    // Définir une fonction pour récupérer l'URL actuelle
    function getCurrentURL() {
        return window.location.href
    }

    // Générer les codes à barres pour chaque place sélectionnée
    for (let i = 0; i < arrayPlace.length; i++) {
        console.log(arrayPlace[i], "  ", IdConcert, "  ", arrayPlace[i], "  ", PrixPlace)
        JsBarcode("#barcode" + arrayPlace[i], IdConcert + arrayPlace[i] + PrixPlace, {
            width: 4,
            height: 60,
        });
    }

    // Enregistrer un gestionnaire d'événements pour le bouton de paiement
    payBtn.addEventListener('click', function () {
        let cards             = document.getElementById('cards');
        let payment           = document.getElementById('payment');
        // cards.classList.remove('hidden');
        cards.style.display   = 'block';
        payment.style.display = 'none';
    })
} catch (e) {
    // Afficher toutes les erreurs dans la console
    console.log(e);
}
