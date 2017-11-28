import './bootstrap';

import App from './components/App.vue'
import Header from './components/Header.vue'
import Sidebar from './components/Sidebar.vue'
import Footer from './components/Footer.vue'
import Banner from './components/Banner.vue'

import router from './router'

Vue.component('app-header', Header)
Vue.component('app-banner', Banner)
Vue.component('app-sidebar', Sidebar)
Vue.component('app-footer', Footer)

window.app = new Vue({
    el: '#app',
    
    router,

    components: {
        'app': App,
    }
});
