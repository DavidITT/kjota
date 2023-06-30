import {useStore} from "vuex";
import {computed} from "vue";

const useEmails = () => {

    const store = useStore()

    return {
        //Actions
        getEmails: ({type, url}) => store.dispatch('contact/getEmails', {type, url}),
        markAsFavorite: (idEmail) => store.dispatch('contact/markAsFavorite', idEmail),
        markAsImportant: (idEmail) => store.dispatch('contact/markAsImportant', idEmail),
        //Getters
        emails: computed(()  => store.getters['contact/emails']),
        links: computed(() => store.getters['contact/links']),
        unreadEmails: computed(() => store.getters['contact/unreadEmails']),
        loader: computed(() => store.getters['contact/loader']),
        //Mutations
        url: store.commit('contact/clearSelectedEmails')
    }
}

export default useEmails
