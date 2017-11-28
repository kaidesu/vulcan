import _ from 'lodash'
import Vue from 'vue'
import axios from 'axios'
import BootstrapVue from 'bootstrap-vue'
import VueRouter from 'vue-router'

Vue.use(BootstrapVue)
// Vue.use(VueRouter)

window._ = _
window.Vue = Vue
window.axios = axios
window.events = new Vue()
