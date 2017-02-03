import VueRouter from 'vue-router';

let routes = [
    { path: '/', component: require('./views/Dashboard') },
    { path: '/domains', component: require('./views/Domains') },
    { path: '/logs', component: require('./views/Logs') },
    { path: '/settings', component: require('./views/Settings') }
];

export default new VueRouter({
    routes
});
