//Import Vue.js for frontend framework, Vue Router for single page application (SPA) and routes for VueRouter
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

//Add VueRouter as a plugin
Vue.use(VueRouter);


//Create top-level Vue instance and bind it to element with id of app
let app = new Vue({
    el: '#app',

    //Add a router to create a new instance of VueRouter with a list of routes
    router: new VueRouter(routes)
});
