import './bootstrap.js';
import router from './routes.js';

// Vue Components
import App from './components/App.vue';
import Chat from './components/Chat.vue';

new Vue({
    el: '#root',

    router,

    components: {
        'app': App,
        'chat': Chat
    }
})
