import Vue from 'vue';
import vuetify from '../plugins/vuetify';
import LoginPage from './LoginPage'

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

Vue.component('login-page', LoginPage);

const login = new Vue({
    vuetify,
    el: '#login'
});
