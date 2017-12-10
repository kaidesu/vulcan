import _ from 'lodash'
import Vue from 'vue'
import axios from 'axios'
import BootstrapVue from 'bootstrap-vue'
import localforage from 'localforage'

Vue.use(BootstrapVue)

localforage.config({
    driver: localforage.LOCALSTORAGE,
    storeName: 'vulcan'
})

window._ = _
window.Vue = Vue
window.axios = axios
window.events = new Vue()
