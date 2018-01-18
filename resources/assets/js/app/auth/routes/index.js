import { Login, Register } from '../components'
import { Auth } from '../../../layouts'

export default [
    {
        path: '/login',
        component: Auth,
        children: [
            {
                name: 'login',
                path: '',
                component: Login,
            }
        ],
        meta: {
            guest: true,
            needsAuth: false
        }
    },
    
    {
        path: '/register',
        component: Register,
        name: 'register',
        meta: {
            guest: true,
            needsAuth: false
        }
    }
]
