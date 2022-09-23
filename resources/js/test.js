import axios from 'axios';

axios.get('/test').then(response => {
    console.log(response.data);
});