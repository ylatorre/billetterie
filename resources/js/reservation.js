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


function Reservation(test) {
    GalerieSupAfficher = document.getElementById('GalerieSupAfficher');

    // ReservationBouton.insertAdjacentHTML('afterend', '<div class="alert alert-success" role="alert">Votre réservation a bien été prise en compte</div>');
    if (GalerieSupAfficher === null && test === 1) {
        axios.get('/GalerieSup').then(response => {
            ReservationBouton.insertAdjacentHTML('beforeend', response.data);
            console.log(response);
        }).catch(err => {
            console.log(err)

        });
        console.log("Reservation", test);
    }
}