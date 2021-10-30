//Import all referenced components
import Home from './components/Home';
import About from './components/About';

//Export an object of routes
export default {
    //Record each new page change using Html5 history API
    mode: 'history',

    //List of routes
    routes: [

        {
            //Path we are listening to and the public/js/components to be loaded
            path: '/',
            component: Home
        },
        {
            path: '/about',
            component: About,
            name: 'about'
        },
    ]
}