import Vue from 'vue'
import Router from 'vue-router'
import { routes as routes } from '../app/index';
import beforeEach from './beforeEach'

const router = new Router({
    routes,
    
    mode: 'history'
})

router.beforeEach(beforeEach)

export default router
