import Vue from 'vue';
import Router from 'vue-router';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Home from './components/Home.vue';

Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
        {path:'/', component:Login},
        {path:'/register', component:Register},
        {path:'/home', component:Home}
    ]  
})