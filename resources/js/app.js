//Import Vue.js for frontend framework, Vue Router for single page application (SPA), routes for VueRouter, axios to interact with APIs
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import axios from 'axios';
import Particles from 'vue-particles';
import AOS from 'aos'
import 'aos/dist/aos.css'


var VueScrollTo = require('vue-scrollto');

//Add VueRouter as a plugin
Vue.use(VueRouter);

//Add Vue Plugins for functionality
Vue.use(Particles);
Vue.use(VueScrollTo);


//Add axios
Vue.prototype.$http = axios;

//Scroll to top
Vue.prototype.$scrollToTop = () => window.scrollTo(0,0);



//Create top-level Vue instance and bind it to element with id of app
let app = new Vue({
    el: '#app',
    
    data: {
        isOpen: false
    },
    created () {
        AOS.init()
    },
    

    //Add a router to create a new instance of VueRouter with a list of routes
    router: new VueRouter(routes),
});

