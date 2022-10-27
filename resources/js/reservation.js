import axios from "axios";

const GalerieSup        = document.getElementById('GalSup');
const GalerieCenter     = document.getElementById('GalCen');
const GalerieInferieur  = document.getElementById('GalInf');
const Cour              = document.getElementById('Cour');
const ReservationBouton = document.getElementById('ReservationBouton');
let GalerieSupAfficher  = document.getElementById('GalerieSupAfficher');
let imgSalle            = document.getElementById('imgSalle');
let valider             = document.getElementById('valider');
let infoConcert         = getCurrentURL().split('/').pop();

let arrayPlace = [];

GalerieSup.addEventListener('click', function () {
    Reservation(1)
    // ReservationBouton.remove()
});


GalerieCenter.addEventListener('click', function () {
    Reservation(2)
});

GalerieInferieur.addEventListener('click', function () {
    Reservation(3)
});

Cour.addEventListener('click', function () {
    Reservation(4)
});

function getCurrentURL() {
    return window.location.href
}


function Reservation(id) {

    imgSalle.remove()
    GalerieSupAfficher = document.getElementById('GalerieSupAfficher');
    if (GalerieSupAfficher === null && id === 1) {
        axios.get('/GalerieSup/' + infoConcert).then(response => {
            ReservationBouton.innerHTML = response.data;
        }).catch(err => {
            console.log(err)
        }).then(() => {
            let blockPlace = document.querySelectorAll('.blockPlace');
            blockPlace.forEach(async function (element) {
                element.addEventListener('click', function () {
                    if (element.classList.contains('placeReserve') === false) {
                        element.classList.toggle('blockPlaceActive');
                        arrayPlace.push(element.getAttribute('data-numeroplace'));
                    }
                })
            });
            for (let i = 0; i < arrayPlace.length; i++) {
                if (arrayPlace[0] >= 0 && arrayPlace[i] <= 683) {
                    let save = document.getElementById(arrayPlace[i])
                    save.classList.toggle('blockPlaceActive');
                }
                continue;
            }
        })
    }
    if (id === 2) {
        axios.get('/GalerieCentral/' + infoConcert).then(response => {
            ReservationBouton.innerHTML = response.data;
        }).catch(err => {
            console.log(err)
        }).then(() => {
            let blockPlace = document.querySelectorAll('.blockPlace');
            blockPlace.forEach(async function (element) {
                element.addEventListener('click', function () {
                    if (element.classList.contains('placeReserve') === false) {
                        element.classList.toggle('blockPlaceActive');
                        arrayPlace.push(element.getAttribute('data-numeroplace'));
                    }

                })
            });
            for (let i = 0; i < arrayPlace.length; i++) {
                if (arrayPlace[i] > 683 && arrayPlace[i] <= 1367) {
                    let save = document.getElementById(arrayPlace[i])
                    save.classList.toggle('blockPlaceActive');
                }

            }
        })
    }
    if (id === 3) {
        axios.get('/GalerieInferieur/' + infoConcert).then(response => {
            ReservationBouton.innerHTML = response.data;
        }).catch(err => {
            console.log(err)
        }).then(() => {
            let blockPlace = document.querySelectorAll('.blockPlace');
            blockPlace.forEach(async function (element) {
                element.addEventListener('click', function () {
                    if (element.classList.contains('placeReserve') === false) {
                        element.classList.toggle('blockPlaceActive');
                        arrayPlace.push(element.getAttribute('data-numeroplace'));
                    }
                })
            });
            for (let i = 0; i < arrayPlace.length; i++) {
                if (arrayPlace[i] > 1367 && arrayPlace[i] <= 2032) {
                    let save = document.getElementById(arrayPlace[i])
                    save.classList.toggle('blockPlaceActive');
                }

            }
        })
    }
    if (id === 4) {
        axios.get('/cour/' + infoConcert).then(response => {
            ReservationBouton.innerHTML = response.data;
        }).catch(err => {
            console.log(err)
        }).then(() => {
            let blockPlace = document.querySelectorAll('.blockPlace');
            blockPlace.forEach(async function (element) {
                element.addEventListener('click', function () {
                    if (element.classList.contains('placeReserve') === false) {
                        element.classList.toggle('blockPlaceActive');
                        arrayPlace.push(element.getAttribute('data-numeroplace'));
                    }


                })
            });
            for (let i = 0; i < arrayPlace.length; i++) {
                if (arrayPlace[i] > 2032 && arrayPlace[i] <= 2500) {
                    let save = document.getElementById(arrayPlace[i])
                    save.classList.toggle('blockPlaceActive');
                }
            }
        })
    }
}



valider.addEventListener('click', function () {
    if (arrayPlace.length === 0) {
        return alert('Vous devez selectionner au moins une place')
    }

        console.log(arrayPlace, window.userID)
        let blockPlaceActive = document.querySelectorAll('.blockPlaceActive');

        blockPlaceActive.forEach(async function (element) {
            element.classList.remove('blockPlaceActive');
            element.classList.add('placeReserve');
        })

    axios.post('/verifePlace', {
        placeSelectionner: arrayPlace,
        idConcert: infoConcert,
        idUser: window.userID
    }).then(response => {
        console.log(response.data)
        // window.location.href = '/';
        // commit( 'SET_LOAD_STATUS', 2 );
//redirect with session data
        window.location.href = '/recapitulatifPaiment/'  + infoConcert + ';' + arrayPlace+";"+response.data;
        arrayPlace = [];

    }).catch(err => {
        console.log(err)
    })
})

