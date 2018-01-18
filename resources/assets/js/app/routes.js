import auth from './auth/routes'
import home from './home/routes'
import errors from './errors/routes'
import notes from './notes/routes'

export default [
    ...auth,
    ...home,
    ...notes,
    
    ...errors,
]
