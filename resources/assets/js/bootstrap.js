import _ from 'lodash'
import Vue from 'vue'
import axios from 'axios'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)

window._ = _
window.Vue = Vue
window.axios = axios
window.events = new Vue()
