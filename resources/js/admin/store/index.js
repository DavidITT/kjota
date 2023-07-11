import {createStore} from 'vuex'
import contact from '../modules/contact/store/contact'
import branches from '../modules/content/store/branch'

const store = createStore({
    modules: {
        contact,
        branches
    }
})

export default store
