import './bootstrap.js';
import router from './routes.js';

// Vue Components
import App from './components/App.vue';
import Chat from './components/Chat.vue';
import AuthorizedClients from './components/passport/AuthorizedClients.vue';
import Clients from './components/passport/Clients.vue';
import PersonalAccessTokens from './components/passport/PersonalAccessTokens.vue';

new Vue({
    el: '#root',

    router,

    components: {
        'app': App,
        'chat': Chat,
        'passport-authorized-clients': AuthorizedClients,
        'passport-clients': Clients,
        'passport-personal-access-tokens': PersonalAccessTokens
    }
})
