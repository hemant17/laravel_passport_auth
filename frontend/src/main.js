import Vue from 'vue'
import App from './App.vue'
import './assets/css/tailwind.css';
import router from './router';
import './axios';
import store from './vuex';

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App),
}).$mount('#app')
