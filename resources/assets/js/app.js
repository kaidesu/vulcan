import './bootstrap';

import App from './components/App.vue'
import Header from './components/Header.vue'
import Sidebar from './components/Sidebar.vue'
import Footer from './components/Footer.vue'
import Banner from './components/Banner.vue'
import Icon from './components/Icon.vue'

import router from './router'
import store from './vuex'

Vue.component('app-header', Header)
Vue.component('app-banner', Banner)
Vue.component('app-sidebar', Sidebar)
Vue.component('app-footer', Footer)
Vue.component('app-icon', Icon)

store.dispatch('auth/setToken').then(() => {
    store.dispatch('auth/fetchUser').catch(() => {
        store.dispatch('auth/clearAuth')
        router.replace({ name: 'login' })
    })
}).catch(() => {
    store.dispatch('auth/clearAuth')
})

window.app = new Vue({
    el: '#app',
    
    router,
    
    store,

    components: {
        'app': App,
    }
});
