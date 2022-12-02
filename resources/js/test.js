import axios from 'axios';


axios.get('/axios').then(response => {
    let body       = document.querySelector('body');
    body.insertAdjacentHTML('beforeend',response.data);
    console.log(response);
}).catch(err => {
    console.log(err)

});


// let test = document.getElementsByClassName("btn")
//
// for (let i = 0; i < test.length; i++) {
//     test[i].addEventListener('click', function () {
//         console.log('test', test[i].id);
//         //add in array
//         let infoConcert = test[i].id;
//         let IdConcert = infoConcert.split(';')[0];
//         let PlaceSelectionner = infoConcert.split(';')[1];
//         let PrixPlace = infoConcert.split(';')[2];
//         let arrayPlace = PlaceSelectionner.split(',')
//         console.log(arrayPlace);
//         for (let i = 0; i < arrayPlace.length; i++) {
//             // console.log(arrayPlace[i]);
//             axios.get('/recap/' + IdConcert + ';' + arrayPlace[i] + ';' + PrixPlace).then(response => {
//                 let body       = document.querySelector('body');
//                 body.insertAdjacentHTML('beforeend',response.data);
//                 console.log(response);
//             }).catch(err => {
//                 console.log(err)
//
//             });
//         }
//
//
//     })
// }
//





