let infoConcert       = getCurrentURL().split('/').pop();
let IdConcert         = infoConcert.split(';')[0];
let PlaceSelectionner = infoConcert.split(';')[1];
let arrayPlace        = PlaceSelectionner.split(',')
let PrixPlace         = infoConcert.split(';')[2];

function getCurrentURL() {
    return window.location.href
}

// console.log(PrixPlace);
// axios.get('/recap/' + infoConcert).then(response => {
//     console.log(response.data);
// }
console.log(arrayPlace);
for (let i = 0; i < arrayPlace.length; i++) {
    // if (arrayPlace[0] >= 0 && arrayPlace[i] <= 683) {
    //     let save = document.getElementById(arrayPlace[i])
    //     save.classList.toggle('blockPlaceActive');
    // }
    // continue;

    // console.log(arrayPlace[i])
    // axios({
    //     url: '/recap/',
    //     method: 'get',
    //     params: {
    //         data: "test"
    //     }
    // }).then(response => {
    //     console.log(response);
    // })
}
