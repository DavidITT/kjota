import {useStore} from "vuex";
import {computed} from "vue";

const useModal = () => {

    const store = useStore()

    return {
        createModal: computed(() => store.getters['contact/createModal']),
        replyEmail: computed(() => store.getters['contact/replyEmail']),
        handleModal: ({modal, statusModal, email}) => store.commit('contact/handleModal', {modal:modal,modalStatus:statusModal, email:email}),
    }
}

export default useModal
