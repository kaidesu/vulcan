import { Notes } from '../components'
import { Default } from '../../../layouts'

export default [
    {
        path: '/notes',
        component: Default,
        children: [
            {
                path: '',
                component: Notes,
                name: 'notes',
                meta: {
                    needsAuth: true
                }
            }
        ]
    }
]
