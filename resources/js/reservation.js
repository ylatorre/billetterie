import axios from "axios";

const GalerieSup        = document.getElementById('GalSup');
const GalerieCenter     = document.getElementById('GalCen');
const GalerieInferieur  = document.getElementById('GalInf');
const Cour              = document.getElementById('Cour');
const ReservationBouton = document.getElementById('ReservationBouton');
let GalerieSupAfficher  = document.getElementById('GalerieSupAfficher');
let imgSalle            = document.getElementById('imgSalle');
let valider             = document.getElementById('valider');
let AfficheListeBillets = document.getElementById('AfficheListeBillets');
let infoConcert         = getCurrentURL().split('/').pop();
let arrayPlaceTemp      = [];
let arrayPlace          = [];


GalerieSup.addEventListener('click', function () {

    Reservation(1)

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
                        if (arrayPlaceTemp.length !== arrayPlace.length) {
                            console.log("different")

                            AfficheListeBillets.innerHTML = '';
                            arrayPlaceTemp.push(arrayPlace.at(-1));

                            for (let i = 0; i < arrayPlaceTemp.length; i++) {
                                // if(getPlaceId[i].getAttribute('data-numeroplace') === arrayPlaceTemp[i]){
                                //
                                // }else {
                                if (document.getElementById("Place" + arrayPlaceTemp[i]) !== null) {
                                    document.getElementById("Place" + arrayPlaceTemp[i]).remove()
                                } else {
                                    AfficheListeBillets.insertAdjacentHTML("beforeend", "<div><div class='flex flex-row listRow' id=" + "Place" + arrayPlaceTemp[i] + "> Place " + arrayPlaceTemp[i] + " selectionner<div>" + "<a id=" + "Supprimer" + arrayPlaceTemp[i] + "> supprimer</a>" + "</div>");
                                }
                            }

                        }
                    }

                })
            });
            for (let i = 0; i < arrayPlace.length; i++) {
                if (arrayPlace[0] >= 0 && arrayPlace[i] <= 683) {
                    let save = document.getElementById(arrayPlace[i])
                    save.classList.toggle('blockPlaceActive');
                }
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
                        if (arrayPlaceTemp.length !== arrayPlace.length) {

                            console.log("different")
                            AfficheListeBillets.innerHTML = '';
                            arrayPlaceTemp.push(arrayPlace.at(-1));
                            for (let i = 0; i < arrayPlaceTemp.length; i++) {

                                if (document.getElementById("Place" + arrayPlaceTemp[i]) !== null) {
                                    document.getElementById("Place" + arrayPlaceTemp[i]).remove()
                                } else {
                                    AfficheListeBillets.insertAdjacentHTML("beforeend", "<div><div class='flex flex-row listRow' id=" + "Place" + arrayPlaceTemp[i] + "> Place " + arrayPlaceTemp[i] + " selectionner<div>" + "<a id=" + "Supprimer" + arrayPlaceTemp[i] + "> supprimer</a>" + "</div>");
                                }
                            }
                        }
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
                        if (arrayPlaceTemp.length !== arrayPlace.length) {
                            console.log("different")
                            AfficheListeBillets.innerHTML = '';
                            arrayPlaceTemp.push(arrayPlace.at(-1));
                            for (let i = 0; i < arrayPlaceTemp.length; i++) {

                                if (document.getElementById("Place" + arrayPlaceTemp[i]) !== null) {
                                    document.getElementById("Place" + arrayPlaceTemp[i]).remove()
                                } else {
                                    AfficheListeBillets.insertAdjacentHTML("beforeend", "<div><div class='flex flex-row listRow' id=" + "Place" + arrayPlaceTemp[i] + "> Place " + arrayPlaceTemp[i] + " selectionner<div>" + "<a id=" + "Supprimer" + arrayPlaceTemp[i] + "> supprimer</a>" + "</div>");
                                }
                            }
                        }
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
                        if (arrayPlaceTemp.length !== arrayPlace.length) {
                            console.log("different")
                            AfficheListeBillets.innerHTML = '';
                            arrayPlaceTemp.push(arrayPlace.at(-1));
                            for (let i = 0; i < arrayPlaceTemp.length; i++) {

                                if (document.getElementById("Place" + arrayPlaceTemp[i]) !== null) {
                                    document.getElementById("Place" + arrayPlaceTemp[i]).remove()
                                } else {
                                    AfficheListeBillets.insertAdjacentHTML("beforeend", "<div><div class='flex flex-row listRow' id=" + "Place" + arrayPlaceTemp[i] + "> Place " + arrayPlaceTemp[i] + " selectionner<div>" + "<a id=" + "Supprimer" + arrayPlaceTemp[i] + "> supprimer</a>" + "</div>");
                                }
                            }
                        }
                    }
                    // // Functionne
                    // let getSupprimer = document.querySelectorAll(`[id^="Supprimer"]`);
                    // for (let i = 0; i < arrayPlaceTemp.length; i++) {
                    //     getSupprimer[i].addEventListener('click', function () {
                    //         // console.log(arrayPlaceTemp[i], arrayPlaceTemp)
                    //         //slite id Supprimer and get the number
                    //         let id = this.id.slice(9);
                    //         console.log(id)
                    //         //remove the element
                    //         document.getElementById("Place" + id).remove();
                    //         //remove the element in the array
                    //         arrayPlaceTemp.splice(arrayPlaceTemp.indexOf(id), 1);
                    //         //remove the element in the array
                    //         arrayPlace.splice(arrayPlace.indexOf(id), 1);
                    //         //remove the class active
                    //         document.getElementById(id).classList.remove('blockPlaceActive');
                    //     })
                    // }
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
    // supprimer();

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
        placeSelectionner: arrayPlace, idConcert: infoConcert, idUser: window.userID
    }).then(response => {
        console.log(response.data)
        window.location.href = '/recapitulatifPaiment/' + infoConcert + ';' + arrayPlace + ";" + response.data;
        arrayPlace           = [];

    }).catch(err => {
        console.log(err)
    })
})


//when change in AfficheListeBillets and click in supprimer remove the element in the array
//create function for the supprimer

AfficheListeBillets.addEventListener('mouseover', function (e) {
    //when click on supprimer delete the element
    // Functionne
    let getSupprimer = document.querySelectorAll(`[id^="Supprimer"]`);

    for (let i = 0; i < arrayPlace.length; i++) {
        try {
            getSupprimer[i].addEventListener('click', function () {
                if (arrayPlace.length === 0) {
                    return 0
                }
                console.log(arrayPlaceTemp[i], arrayPlaceTemp)
                //slite id Supprimer and get the number
                let id = this.id.slice(9);
                //remove the element
                document.getElementById("Place" + id).remove();
                //remove the element in the array
                arrayPlaceTemp.splice(arrayPlaceTemp.indexOf(id), 1);
                //remove the element in the array
                arrayPlace.splice(arrayPlace.indexOf(id), 1);
                //remove the class active
                document.getElementById(id).classList.remove('blockPlaceActive');
            })
        } catch (e) {
            console.log(e)
        }
    }

})




