import axios from 'axios'

axios.defaults.baseURL = 'http://laravel_passport_auth.test/api/';

axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('token');