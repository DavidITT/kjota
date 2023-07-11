import {useStore} from "vuex";
import {computed} from "vue";

const useModal = () => {

    const store = useStore()

    return {
        showBranch: computed(() => store.getters['branches/showBranch']),
        editBranch: computed(() => store.getters['branches/editBranch']),
        handleModal: ({modal, status }) => store.commit('branches/handleModal', {modal:modal,status:status}),
    }
}

export default useModal
