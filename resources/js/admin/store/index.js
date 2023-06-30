import {createStore} from 'vuex'
import contact from '../modules/contact/store/contact'

const store = createStore({
    modules: {
        contact
    }
})

export default store
