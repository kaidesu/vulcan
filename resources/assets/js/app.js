import './bootstrap';

import Flash from './components/Flash.vue'
import LogoutButton from './components/LogoutButton.vue'

window.app = new Vue({
    el: '#app',

    components: {
        'flash': Flash,
        'logout-button': LogoutButton
    }
});
