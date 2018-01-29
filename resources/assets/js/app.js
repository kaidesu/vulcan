/**
 * First, we will import our bootstrap script.
 */

import './bootstrap'
import feather from 'feather-icons'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('passport-clients', require('./components/passport/Clients.vue'))
Vue.component('passport-authorized-clients', require('./components/passport/AuthorizedClients.vue'))
Vue.component('passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue'))

Vue.component('flash', require('./components/Flash.vue'))
Vue.component('messages', require('./components/Messages.vue'))
Vue.component('post-message', require('./components/PostMessage.vue'))
Vue.component('logout-button', require('./components/LogoutButton.vue'))

const app = new Vue({
    el: '#app',
    
    mounted() {
        feather.replace()
    }
});
