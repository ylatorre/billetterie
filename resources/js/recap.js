let infoConcert       = getCurrentURL().split('/').pop();
let IdConcert         = infoConcert.split(';')[0];
let PlaceSelectionner = infoConcert.split(';')[1];
let arrayPlace        = PlaceSelectionner.split(',')
let PrixPlace         = infoConcert.split(';')[2];
let payBtn            = document.getElementById('payBtn');


function getCurrentURL() {
    return window.location.href
}

// console.log(PrixPlace);
// axios.get('/recap/' + infoConcert).then(response => {
//     console.log(response.data);
// }
// document.getElementById('barcode'+arrayPlace[i])
console.log(arrayPlace);
for (let i = 0; i < arrayPlace.length; i++) {

    JsBarcode("#barcode" + arrayPlace[i], IdConcert + arrayPlace[i] + PrixPlace, {
        width: 4,
        height: 60,
    });

}

payBtn.addEventListener('click', function () {
    let cards = document.getElementById('cards');
    let payment = document.getElementById('payment');
    // cards.classList.remove('hidden');
    cards.style.display = 'block';
    payment.style.display = 'none';
})