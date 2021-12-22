//Import all referenced components
import Home from './components/Home';
import Resume from './components/Resume';
import Contact from './components/Contact';
import NotFound from './components/NotFound';

//Export an object of routes
export default {
    //Record each new page change using Html5 history API
    mode: 'history',

    linkActiveClass: 'font-bold',

    //List of routes
    routes: [
        //Catch all route for 404 errors
        {
            path: '*',
            component: NotFound

        },

        {
            //Path we are listening to and the public/js/components to be loaded
            path: '/',
            component: Home
        },
        {
            path: '/resume',
            component: Resume,
            name: 'resume'
        },
        {
            path: '/contact',
            component: Contact,
            name: 'contact'
        },
    ]
}