try {
    let infoConcert       = getCurrentURL().split('/').pop();
    let IdConcert         = infoConcert.split(';')[0];
    let PlaceSelectionner = infoConcert.split(';')[1];
    let PrixPlace         = infoConcert.split(';')[2];
    let payBtn            = document.getElementById('payBtn');
    let arrayPlace        = PlaceSelectionner.split(',')


    function getCurrentURL() {
        return window.location.href
    }

// console.log(PrixPlace);
// axios.get('/recap/' + infoConcert).then(response => {
//     console.log(response.data);
// }
// document.getElementById('barcode'+arrayPlace[i])
//     console.log(arrayPlace);
    for (let i = 0; i < arrayPlace.length; i++) {
        console.log(arrayPlace[i], "  ", IdConcert, "  ", arrayPlace[i], "  ", PrixPlace)
        JsBarcode("#barcode" + arrayPlace[i], IdConcert + arrayPlace[i] + PrixPlace, {
            width: 4,
            height: 60,
        });
    }

    payBtn.addEventListener('click', function () {
        let cards             = document.getElementById('cards');
        let payment           = document.getElementById('payment');
        // cards.classList.remove('hidden');
        cards.style.display   = 'block';
        payment.style.display = 'none';
    })
} catch (e) {
    console.log(e);
}
