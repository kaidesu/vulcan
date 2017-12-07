import { Home } from '../components'
import { Default } from '../../../layouts'

export default [
    {
        path: '/',
        component: Default,
        children: [
            {
                path: '/',
                component: Home,
                name: 'home',
                meta: {
                    needsAuth: true
                }
            }
        ]
    }
]
