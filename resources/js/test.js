import axios from 'axios';

axios.get('/axios').then(response => {
    console.log(response.data);
});
