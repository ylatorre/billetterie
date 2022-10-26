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


function Reservation(test) {
    GalerieSupAfficher = document.getElementById('GalerieSupAfficher');

    // ReservationBouton.insertAdjacentHTML('afterend', '<div class="alert alert-success" role="alert">Votre réservation a bien été prise en compte</div>');
    if (GalerieSupAfficher === null && test === 1) {
        axios.get('/GalerieSup').then(response => {
             ReservationBouton.innerHTML =  response.data;
            console.log(response);

            // return total = document.querySelectorAll('.blockPlace').length;


        }).catch(err => {
            console.log(err)

        }).then(() => {
        //     total = document.querySelectorAll('.blockPlace').length;
        //     console.log(total);
            let blockPlace = document.querySelectorAll('.blockPlace');
            blockPlace.forEach(async function (element) {
                element.addEventListener('click', function () {
                    element.classList.toggle('blockPlaceActive');
                })
                console.log("click");
            });

            // let blockPlace = document.querySelectorAll('.blockPlace');



        }).then(() => {
            let blockPlace = document.querySelectorAll('.blockPlace');
            // let array = $placesTotal;
            console.log("tresudhj")
            blockPlace.forEach(function (element) {
                let attribute = element.getAttribute('data-NumeroPlace')
                for (let i = 0; i < array.length; i++) {
                    let valeur = array[i];
                    if (attribute === valeur.NumberPlace) {
                        element.classList.add('placeReserve')
                        console.log(attribute,valeur.NumberPlace)

                    }
                }
            });
        })


        console.log("Reservation", test);


        // for (let i = 0; i < total; i++) {
        //     blockPlace[i].addEventListener('click', function () {
        //         blockPlace[i].classList.toggle('blockPlaceActive');
        //         console.log(blockPlace[i].id);
        //     })
        //
        // }
    }
    if (test === 2) {
        ReservationBouton.innerHTML = "Reservation 2";
    }
    // console.log("Reservation", test);
}

// let asyncForEach = async (array, callback) => {
// for (let index = 0; index < array.length; index++) {
//         await callback(array[index], index, array)
//     }
// };
console.log(blockPlace.length,"test block");

