import axios from 'axios';


axios.get('/axios').then(response => {
    let body       = document.querySelector('body');
    body.insertAdjacentHTML('beforeend',response.data);
    console.log(response);
}).catch(err => {
    console.log(err)

});
