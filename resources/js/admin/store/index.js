import {createStore} from 'vuex'
import contact from '../modules/contact/store/contact'
import branches from '../modules/content/store/branch'
import categories from '../modules/categories/store'

const store = createStore({
    modules: {
        contact,
        branches,
        categories
    }
})

export default store
