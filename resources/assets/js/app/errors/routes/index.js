import { NotFound } from '../components'
import { Auth } from '../../../layouts'

export default [
    {
        path: '*',
        component: Auth,
        children: [
            {
                name: 'not-found',
                path: '/',
                component: NotFound,
            }
        ]
    }
]
