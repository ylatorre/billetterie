import axios from "axios";

const GalerieSup         = document.getElementById('GalSup');
const GalerieCenter      = document.getElementById('GalCen');
const GalerieInferieur   = document.getElementById('GalInf');
const Cour               = document.getElementById('Cour');
const ReservationBouton  = document.getElementById('ReservationBouton');
let GalerieSupAfficher = document.getElementById('GalerieSupAfficher');

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
let blockPlace = document.querySelectorAll('.blockPlace');
let total = "Null sa marche pas"

function getCurrentURL () {
    return window.location.href
}
function Reservation(test) {
    GalerieSupAfficher = document.getElementById('GalerieSupAfficher');
    let infoConcert = getCurrentURL().split('/').pop();
    if (GalerieSupAfficher === null && test === 1) {
        axios.get('/GalerieSup/'+infoConcert
    ).then(response => {
             ReservationBouton.innerHTML =  response.data;
            console.log(response.data);
        }).catch(err => {
            console.log(err)
        }).then(() => {
            let blockPlace = document.querySelectorAll('.blockPlace');
            blockPlace.forEach(async function (element) {
                element.addEventListener('click', function () {
                    element.classList.toggle('blockPlaceActive');
                })
                console.log("click");
            });
        })
    }
    if (test === 2) {
        axios.get('/GalerieCentral/'+infoConcert
        ).then(response => {
            ReservationBouton.innerHTML =  response.data;
            console.log(response.data);
        }).catch(err => {
            console.log(err)
        }).then(() => {
            let blockPlace = document.querySelectorAll('.blockPlace');
            blockPlace.forEach(async function (element) {
                element.addEventListener('click', function () {
                    element.classList.toggle('blockPlaceActive');
                })
                console.log("click");
            });
        })
    }
    if (test === 3) {
        axios.get('/GalerieInferieur/'+infoConcert
        ).then(response => {
            ReservationBouton.innerHTML =  response.data;
            console.log(response.data);
        }).catch(err => {
            console.log(err)
        }).then(() => {
            let blockPlace = document.querySelectorAll('.blockPlace');
            blockPlace.forEach(async function (element) {
                element.addEventListener('click', function () {
                    element.classList.toggle('blockPlaceActive');
                })
                console.log("click");
            });
        })
    }
    if (test === 4) {
        axios.get('/Cour/'+infoConcert
        ).then(response => {
            ReservationBouton.innerHTML =  response.data;
            console.log(response.data);
        }).catch(err => {
            console.log(err)
        }).then(() => {
            let blockPlace = document.querySelectorAll('.blockPlace');
            blockPlace.forEach(async function (element) {
                element.addEventListener('click', function () {
                    element.classList.toggle('blockPlaceActive');
                })
                console.log("click");
            });
        })
    }

    // console.log("Reservation", test);
}

// let asyncForEach = async (array, callback) => {
// for (let index = 0; index < array.length; index++) {
//         await callback(array[index], index, array)
//     }
// };
console.log(blockPlace.length,"test block");

