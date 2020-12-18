import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import Form from './core/Form'

window.Vue = Vue;
window.axios = axios;

Vue.use(VueRouter);

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Form = Form;
